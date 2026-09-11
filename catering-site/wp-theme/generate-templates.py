#!/usr/bin/env python3
"""Convert Lumina HTML pages into WordPress PHP templates."""
from pathlib import Path
import re

ROOT = Path("/workspace/catering-site")
THEME = ROOT / "wp-theme/lumina-catering"

REPLACEMENTS = [
    (r'href="index\.html#([^"]+)"', r'''href="<?php echo esc_url(home_url('/#\1')); ?>"'''),
    (r'href="\.\./index\.html#([^"]+)"', r'''href="<?php echo esc_url(home_url('/#\1')); ?>"'''),
    (r'href="index\.html"', r'''href="<?php echo esc_url(home_url('/')); ?>"'''),
    (r'href="\.\./index\.html"', r'''href="<?php echo esc_url(home_url('/')); ?>"'''),
    (r'href="menu\.html"', r'''href="<?php echo esc_url(home_url('/menu/')); ?>"'''),
    (r'href="\.\./menu\.html"', r'''href="<?php echo esc_url(home_url('/menu/')); ?>"'''),
    (r'href="about\.html"', r'''href="<?php echo esc_url(home_url('/about/')); ?>"'''),
    (r'href="blog\.html"', r'''href="<?php echo esc_url(home_url('/blog/')); ?>"'''),
    (r'href="services/bar-service\.html"', r'''href="<?php echo esc_url(home_url('/bar-service/')); ?>"'''),
    (r'href="\.\./services/bar-service\.html"', r'''href="<?php echo esc_url(home_url('/bar-service/')); ?>"'''),
    (r'src="assets/images/([^"]+)"', r'''src="<?php echo lumina_img('\1'); ?>"'''),
    (r'src="\.\./assets/images/([^"]+)"', r'''src="<?php echo lumina_img('\1'); ?>"'''),
]


def extract_main(html: str) -> str:
    start_marker = '<nav class="mobile-nav">'
    idx = html.find(start_marker)
    if idx == -1:
        raise SystemExit("mobile-nav not found")
    end = html.find("</nav>", idx)
    html = html[end + len("</nav>") :]
    footer_idx = html.lower().find("<footer")
    if footer_idx != -1:
        html = html[:footer_idx]
    html = re.sub(r"<script[\s\S]*?</script>", "", html)
    return html.strip()


def convert(html: str) -> str:
    body = extract_main(html)
    for pattern, repl in REPLACEMENTS:
        body = re.sub(pattern, repl, body)
    return body


def wrap(body: str, extra_js: str = "", template_name: str | None = None) -> str:
    extra = f"\n{extra_js}\n" if extra_js else ""
    header = ["<?php"]
    if template_name:
        header.append(f"/* Template Name: {template_name} */")
    header += [
        "if (!defined('ABSPATH')) {",
        "    exit;",
        "}",
        "get_header();",
        "?>",
        "",
    ]
    return "\n".join(header) + f"{body}\n{extra}<?php get_footer(); ?>\n"


MENU_JS = """<script>
    document.querySelectorAll('.menu-tab').forEach(tab => {
      tab.addEventListener('click', () => {
        const cat = tab.dataset.category;
        document.querySelectorAll('.menu-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.menu-item').forEach(item => {
          item.style.display = (cat === 'all' || item.dataset.cat === cat) ? '' : 'none';
        });
      });
    });
  </script>"""


def form_names(body: str) -> str:
    body = body.replace(
        '<form class="inquiry-form reveal">',
        '<form class="inquiry-form reveal" id="lumina-inquiry-form">',
    )
    body = body.replace(
        '<input type="text" required data-i18n-placeholder="form.name">',
        '<input type="text" name="name" required data-i18n-placeholder="form.name">',
    )
    body = body.replace(
        '<input type="email" required data-i18n-placeholder="form.email">',
        '<input type="email" name="email" required data-i18n-placeholder="form.email">',
    )
    body = body.replace(
        '<input type="tel" data-i18n-placeholder="form.phone">',
        '<input type="tel" name="phone" data-i18n-placeholder="form.phone">',
    )
    body = body.replace("<select>", '<select name="event_type">')
    body = body.replace(
        '<input type="number" min="1" placeholder="50">',
        '<input type="number" name="guests" min="1" placeholder="50">',
    )
    body = body.replace('<input type="date">', '<input type="date" name="event_date">')
    body = body.replace(
        '<textarea data-i18n-placeholder="form.message"></textarea>',
        '<textarea name="message" data-i18n-placeholder="form.message"></textarea>',
    )
    body = body.replace(
        '<button type="submit" class="btn btn-primary form-submit" data-i18n="form.submit">Send Inquiry</button>',
        '<button type="submit" class="btn btn-primary form-submit" data-i18n="form.submit">Send Inquiry</button>\n          <div class="form-notice" hidden></div>',
    )
    return body


def main():
    front = form_names(convert((ROOT / "index.html").read_text()))
    (THEME / "front-page.php").write_text(wrap(front))

    (THEME / "templates/page-menu.php").write_text(
        wrap(convert((ROOT / "menu.html").read_text()), MENU_JS, "Menu")
    )
    (THEME / "templates/page-about.php").write_text(
        wrap(convert((ROOT / "about.html").read_text()), template_name="About")
    )
    (THEME / "templates/page-blog.php").write_text(
        wrap(convert((ROOT / "blog.html").read_text()), template_name="Blog & Cases")
    )
    (THEME / "templates/page-bar-service.php").write_text(
        wrap(convert((ROOT / "services/bar-service.html").read_text()), template_name="Bar Service")
    )

    print("templates written")


if __name__ == "__main__":
    main()
