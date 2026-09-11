#!/usr/bin/env python3
"""Build online review.html from local photo-library/index.html with server marks + path fixes."""
from __future__ import annotations

import json
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
SRC = ROOT / "photo-library" / "index.html"
OUT = Path(__file__).resolve().parent / "generated" / "review.html"


def rewrite_paths(data: dict) -> dict:
    for it in data.get("candidates", []):
        src = it.get("src") or it.get("path") or ""
        src = src.lstrip("./")
        if not src.startswith("library/"):
            it["src"] = "library/" + src
    for key in ("site", "siteFiles", "sitePlacements"):
        for it in data.get(key, []) or []:
            src = it.get("src") or ""
            m = re.search(r"assets/images/([^/?#]+)$", src)
            if m:
                it["src"] = "/wp-content/themes/lumina-catering/assets/images/" + m.group(1)
            elif "lumina-catering/assets/images/" in src:
                name = src.split("lumina-catering/assets/images/")[-1]
                it["src"] = "/wp-content/themes/lumina-catering/assets/images/" + name
    return data


def patch_marks_layer(html: str) -> str:
    """Replace localStorage mark helpers with server API versions."""
    # Remove only KEYS + loadMarks + saveMarks; keep let tab / siteMode / etc.
    html2, n1 = re.subn(
        r"\nconst KEYS = \{[\s\S]*?\};\n",
        "\n",
        html,
        count=1,
    )
    if n1 != 1:
        raise SystemExit("KEYS block not found")

    html2, n2 = re.subn(
        r"function loadMarks\(which\)\{\s*try \{ return JSON\.parse\(localStorage\.getItem\(KEYS\[which\]\) \|\| '\{\}'\) \|\| \{\}; \}\s*catch\(e\)\{ return \{\}; \}\s*\}\s*"
        r"function saveMarks\(which, marks\)\{\s*localStorage\.setItem\(KEYS\[which\], JSON\.stringify\(marks\)\);\s*\}\s*",
        "",
        html2,
        count=1,
    )
    if n2 != 1:
        raise SystemExit("loadMarks/saveMarks localStorage block not found")

    injection = """
const API = 'api/marks.php';
let SERVER_MARKS = { candidates: {}, site: {} };

async function fetchMarks(){
  const res = await fetch(API, { credentials: 'same-origin' });
  if (res.status === 401) { location.href = 'login.php'; return; }
  const data = await res.json();
  if (!data.ok) throw new Error(data.error || 'load_failed');
  SERVER_MARKS = {
    candidates: data.marks.candidates || {},
    site: data.marks.site || {}
  };
}

function markBucket(which){
  return which === 'candidates' ? 'candidates' : 'site';
}

function loadMarks(which){
  const raw = SERVER_MARKS[markBucket(which)] || {};
  // PHP may encode empty object as []; normalize to object
  return Object.assign({}, Array.isArray(raw) ? {} : raw);
}

async function persistMarks(bucket, marks){
  const res = await fetch(API, {
    method: 'POST',
    credentials: 'same-origin',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ which: bucket, replace: marks })
  });
  if (res.status === 401) { location.href = 'login.php'; return; }
  const data = await res.json();
  if (!data.ok) {
    toast('儲存失敗：' + (data.error || ''));
    return;
  }
  SERVER_MARKS = {
    candidates: data.marks.candidates || {},
    site: data.marks.site || {}
  };
}

function saveMarks(which, marks){
  const bucket = markBucket(which);
  SERVER_MARKS[bucket] = marks;
  persistMarks(bucket, marks);
}

"""
    # Insert after DATA block ending `};` of const DATA — actually after variable lets is fine:
    # find `let folderFilter = 'all';`
    anchor = "let folderFilter = 'all';"
    idx = html2.find(anchor)
    if idx < 0:
        raise SystemExit("folderFilter anchor not found")
    insert_at = idx + len(anchor)
    return html2[:insert_at] + "\n" + injection + html2[insert_at:]


def main() -> None:
    html = SRC.read_text(encoding="utf-8")
    m = re.search(r"const DATA = (\{.*?\});", html, re.S)
    if not m:
        raise SystemExit("DATA block not found in photo-library/index.html")
    data = rewrite_paths(json.loads(m.group(1)))
    data_js = "const DATA = " + json.dumps(data, ensure_ascii=False) + ";"
    html = html[: m.start()] + data_js + html[m.end() :]

    html = patch_marks_layer(html)

    html = html.replace(
        "標記存在本機 localStorage（線上版會同步伺服器）。",
        "標記會同步到線上伺服器，同事之間共用。",
    )

    if "<!--PHOTO_REVIEW_LOGOUT-->" not in html:
        html = html.replace(
            "<h1>Lumina 相片審核</h1>",
            "<h1>Lumina 相片審核 <!--PHOTO_REVIEW_LOGOUT--></h1>",
        )
    if "a.logout{" not in html:
        html = html.replace(
            "</style>",
            "a.logout{float:right;color:#95d5b2;font-size:.85rem;text-decoration:none;font-weight:500}\n</style>",
        )

    old_boot = "render();\n</script>"
    new_boot = (
        "fetchMarks().then(()=>render()).catch(err=>{\n"
        "  console.error(err);\n"
        "  document.body.insertAdjacentHTML('afterbegin',"
        "'<p style=\"padding:16px;color:#f4a4a4\">無法載入標記，請重新登入或聯絡管理員。</p>');\n"
        "});\n</script>"
    )
    if old_boot not in html:
        raise SystemExit("render() boot strap not found")
    html = html.replace(old_boot, new_boot, 1)

    OUT.parent.mkdir(parents=True, exist_ok=True)
    OUT.write_text(html, encoding="utf-8")
    print(f"Wrote {OUT} ({OUT.stat().st_size} bytes)")


if __name__ == "__main__":
    main()
