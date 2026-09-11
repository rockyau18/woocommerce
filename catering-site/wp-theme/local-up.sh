#!/usr/bin/env bash
# Start a local WordPress copy of Lumina Catering at http://localhost:8090
set -euo pipefail

ROOT="$(cd "$(dirname "$0")" && pwd)"
cd "$ROOT"

wpcli() {
  docker compose run --rm wpcli "$@"
}

if ! command -v docker >/dev/null 2>&1; then
  echo "請先安裝 Docker Desktop：https://www.docker.com/products/docker-desktop/"
  exit 1
fi

if ! docker compose version >/dev/null 2>&1; then
  echo "需要 Docker Compose v2（Docker Desktop 已內建）。"
  exit 1
fi

mkdir -p wp-local-data
echo "Starting MySQL + WordPress..."
docker compose up -d db wordpress

echo "Waiting for WordPress files..."
for i in $(seq 1 90); do
  if [[ -f "$ROOT/wp-local-data/wp-includes/version.php" ]]; then
    break
  fi
  if (( i == 90 )); then
    echo "WordPress 檔案還沒複製完成。請確認 Docker 正在運行後再試一次。"
    exit 1
  fi
  sleep 2
done

echo "Waiting for database..."
for i in $(seq 1 60); do
  # Prefer compose healthcheck; wp db check can fail on MySQL 8 self-signed TLS.
  if docker compose exec -T db mysqladmin ping -h 127.0.0.1 -uwordpress -pwordpress --silent >/dev/null 2>&1; then
    break
  fi
  if (( i == 60 )); then
    echo "資料庫連線逾時。"
    exit 1
  fi
  sleep 2
done

if ! wpcli wp core is-installed >/dev/null 2>&1; then
  echo "Installing WordPress (first run)..."
  wpcli wp core install \
    --url="http://localhost:8090" \
    --title="Lumina Catering HK" \
    --admin_user="admin" \
    --admin_password="admin" \
    --admin_email="dev@localhost.local" \
    --skip-email
fi

wpcli wp theme activate lumina-catering
wpcli wp eval 'if (function_exists("lumina_sync_pages")) { lumina_sync_pages(); echo "pages synced\n"; }'
wpcli wp rewrite structure '/%postname%/' --hard >/dev/null || true
wpcli wp option update blog_public 0 >/dev/null

cat <<EOF

本機網站已啟動
  前台： http://localhost:8090
  後台： http://localhost:8090/wp-admin
  帳號： admin
  密碼： admin

改 lumina-catering/ 裡的檔案會即時反映（請強制重新整理）。
測完要上線：  ./deploy.sh

停止：  ./local-down.sh
EOF
