#!/usr/bin/env bash
# Deploy Lumina Catering theme to the SiteGround WordPress test site.
# Does not store passwords. Uses ~/.ssh/id_ed25519.
set -euo pipefail

HOST="${LUMINA_SSH_HOST:-ssh.yaul12.sg-host.com}"
USER="${LUMINA_SSH_USER:-u3347-axwl0x5ozuus}"
PORT="${LUMINA_SSH_PORT:-18765}"
REMOTE="${LUMINA_WP_PATH:-/home/customer/www/yaul12.sg-host.com/public_html}"
KEY="${LUMINA_SSH_KEY:-$HOME/.ssh/id_ed25519}"
THEME_SRC="$(cd "$(dirname "$0")/lumina-catering" && pwd)"
IMAGES_SRC="$(cd "$(dirname "$0")/../assets/images" && pwd)"

SSH_OPTS=(-p "$PORT" -i "$KEY" -o IdentitiesOnly=yes -o StrictHostKeyChecking=accept-new -o ConnectTimeout=20)

echo "Uploading theme to ${USER}@${HOST}:${REMOTE}/wp-content/themes/lumina-catering"
rsync -az --delete --exclude 'assets/images/' \
  -e "ssh ${SSH_OPTS[*]}" \
  "$THEME_SRC/" \
  "${USER}@${HOST}:${REMOTE}/wp-content/themes/lumina-catering/"

echo "Uploading images"
rsync -az \
  -e "ssh ${SSH_OPTS[*]}" \
  "$IMAGES_SRC/" \
  "${USER}@${HOST}:${REMOTE}/wp-content/themes/lumina-catering/assets/images/"

ssh "${SSH_OPTS[@]}" "${USER}@${HOST}" "cd '$REMOTE' && \
  if command -v wp >/dev/null 2>&1; then WP='wp'; \
  elif [[ -x vendor/bin/wp ]]; then WP='vendor/bin/wp'; \
  else WP='php wp-cli.phar'; fi && \
  \$WP theme activate lumina-catering && \
  \$WP rewrite structure '/%postname%/' --hard && \
  \$WP rewrite flush --hard && \
  (\$WP plugin deactivate woocommerce storefront-powerpack --allow-root 2>/dev/null || true) && \
  (\$WP plugin deactivate woocommerce 2>/dev/null || true) && \
  echo THEME_ACTIVE=\$(\$WP option get stylesheet) && \
  echo FRONT=\$(\$WP option get page_on_front) && \
  echo BLOGNAME=\$(\$WP option get blogname)"

echo "Deploy complete. Visit https://yaul12.sg-host.com"
