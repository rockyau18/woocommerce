#!/usr/bin/env bash
# Deploy Lumina Catering theme to the SiteGround WordPress test site.
set -euo pipefail

HOST="${LUMINA_SSH_HOST:-ssh.yaul12.sg-host.com}"
USER="${LUMINA_SSH_USER:-u3347-axwl0x5ozuus}"
PORT="${LUMINA_SSH_PORT:-18765}"
REMOTE="${LUMINA_WP_PATH:-/home/customer/www/yaul12.sg-host.com/public_html}"
KEY="${LUMINA_SSH_KEY:-$HOME/.ssh/id_ed25519}"
THEME_SRC="$(cd "$(dirname "$0")/lumina-catering" && pwd)"

SSH_OPTS=(-p "$PORT" -i "$KEY" -o IdentitiesOnly=yes -o StrictHostKeyChecking=accept-new -o ConnectTimeout=20)

echo "Uploading optimized theme (including WebP images)"
rsync -az --delete \
  -e "ssh ${SSH_OPTS[*]}" \
  "$THEME_SRC/" \
  "${USER}@${HOST}:${REMOTE}/wp-content/themes/lumina-catering/"

ssh "${SSH_OPTS[@]}" "${USER}@${HOST}" "cd '$REMOTE' && \
  WP=wp && \
  \$WP eval 'lumina_sync_pages();' && \
  \$WP rewrite structure '/%postname%/' --hard && \
  \$WP rewrite flush --hard && \
  \$WP cache flush && \
  (\$WP sg purge 2>/dev/null || true) && \
  echo THEME=\$(\$WP option get stylesheet) && \
  echo PAGES=\$(\$WP post list --post_type=page --field=post_name --format=csv)"

# Also refresh the shared photo-review site (candidates + marks UI)
if [[ -f "$(dirname "$0")/deploy-photo-review.sh" ]]; then
  echo "Updating online photo-review..."
  bash "$(dirname "$0")/deploy-photo-review.sh"
fi

echo "Deploy complete. Visit https://yaul12.sg-host.com"
echo "Photo review: https://yaul12.sg-host.com/photo-review/"
