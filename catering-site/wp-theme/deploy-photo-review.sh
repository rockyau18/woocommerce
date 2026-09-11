#!/usr/bin/env bash
# Deploy photo-review (shared-password gallery) to SiteGround.
set -euo pipefail

HOST="${LUMINA_SSH_HOST:-ssh.yaul12.sg-host.com}"
USER="${LUMINA_SSH_USER:-u3347-axwl0x5ozuus}"
PORT="${LUMINA_SSH_PORT:-18765}"
REMOTE="${LUMINA_WP_PATH:-/home/customer/www/yaul12.sg-host.com/public_html}"
KEY="${LUMINA_SSH_KEY:-$HOME/.ssh/id_ed25519}"

THEME_DIR="$(cd "$(dirname "$0")" && pwd)"
REVIEW_SRC="$(cd "$THEME_DIR/../photo-review" && pwd)"
LIB_SRC="$(cd "$THEME_DIR/../photo-library" && pwd)"

SSH_OPTS=(-p "$PORT" -i "$KEY" -o IdentitiesOnly=yes -o StrictHostKeyChecking=accept-new -o ConnectTimeout=20)

if [[ ! -f "$REVIEW_SRC/config.php" ]]; then
  echo "缺少 photo-review/config.php — 請先從 config.sample.php 複製並設定密碼。"
  exit 1
fi

echo "Building online review.html..."
python3 "$REVIEW_SRC/build_online_app.py"

echo "Uploading photo-review app (PHP + generated UI)"
rsync -az --delete \
  --exclude '.DS_Store' \
  --exclude 'README.md' \
  --exclude 'build_online_app.py' \
  --exclude 'config.sample.php' \
  --exclude 'library/' \
  --exclude 'data/marks.json' \
  -e "ssh ${SSH_OPTS[*]}" \
  "$REVIEW_SRC/" \
  "${USER}@${HOST}:${REMOTE}/photo-review/"

echo "Uploading candidate photo library (skip archive)"
rsync -az --delete \
  --exclude '.DS_Store' \
  --exclude 'index.html' \
  --exclude 'CATALOG.md' \
  --exclude '_archive-western-v1/' \
  --exclude '_archive*/' \
  -e "ssh ${SSH_OPTS[*]}" \
  "$LIB_SRC/" \
  "${USER}@${HOST}:${REMOTE}/photo-review/library/"

# Ensure data dir writable; create marks.json only if missing (never wipe colleague marks)
ssh "${SSH_OPTS[@]}" "${USER}@${HOST}" "bash -s" <<EOF
set -e
DIR='${REMOTE}/photo-review'
mkdir -p "\$DIR/data" "\$DIR/library" "\$DIR/generated"
if [[ ! -f "\$DIR/data/marks.json" ]]; then
  printf '%s\\n' '{ "candidates": {}, "site": {}, "updated_at": null }' > "\$DIR/data/marks.json"
fi
chmod 755 "\$DIR/data" || true
chmod 664 "\$DIR/data/marks.json" || true
chmod 644 "\$DIR/config.php" || true
# SiteGround user must own files for PHP write
EOF

echo "Photo review deployed:"
echo "  https://yaul12.sg-host.com/photo-review/"

