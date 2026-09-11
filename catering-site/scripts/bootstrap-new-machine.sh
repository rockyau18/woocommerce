#!/usr/bin/env bash
# Bootstrap Lumina catering workspace on a new machine (after git clone).
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/../.." && pwd)"
SITE="$ROOT/catering-site"
THEME="$SITE/wp-theme"
REVIEW="$SITE/photo-review"

echo "== Lumina bootstrap =="
echo "Root: $ROOT"

if [[ ! -d "$SITE" ]]; then
  echo "找不到 catering-site/。請確認已 clone rockyau18/woocommerce 並在正確目錄。"
  exit 1
fi

cd "$ROOT"
echo "Branch: $(git branch --show-current 2>/dev/null || echo '?')"
git status -sb | head -20 || true

echo
echo "-- Secrets --"
if [[ ! -f "$REVIEW/config.php" ]]; then
  cp "$REVIEW/config.sample.php" "$REVIEW/config.php"
  echo "已建立 photo-review/config.php（請填入與線上相同的共用密碼）"
else
  echo "photo-review/config.php 已存在"
fi

if [[ ! -f "$HOME/.ssh/id_ed25519" ]]; then
  echo "警告：沒有 ~/.ssh/id_ed25519 — 無法 ./deploy.sh，請從舊電腦安全拷貝或新產生並加到 SiteGround。"
else
  echo "SSH key: ~/.ssh/id_ed25519 OK"
fi

chmod +x "$THEME/local-up.sh" "$THEME/local-down.sh" "$THEME/deploy.sh" "$THEME/deploy-photo-review.sh" 2>/dev/null || true

echo
echo "-- Next --"
echo "1) 用 Cursor 開啟資料夾：$ROOT"
echo "2) 開新 Agent，貼：請先讀 catering-site/HANDOFF.md"
echo "3) 本機預覽：cd catering-site/wp-theme && ./local-up.sh"
echo "4) 換電腦說明：catering-site/CONTINUE-ON-ANOTHER-COMPUTER.md"
echo
echo "注意：Local Cursor 對話不會自動同步到新電腦；請用 HANDOFF + 新對話接續。"

if command -v docker >/dev/null 2>&1; then
  read -r -p "現在啟動本機 Docker WordPress？[y/N] " ans || true
  if [[ "${ans:-}" =~ ^[Yy]$ ]]; then
    (cd "$THEME" && ./local-up.sh)
  fi
else
  echo "未偵測到 Docker，略過本機 WP 啟動。"
fi
