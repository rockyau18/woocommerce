#!/usr/bin/env bash
# Stop the local WordPress copy (data is kept for next start).
set -euo pipefail
cd "$(dirname "$0")"
docker compose down
echo "已停止本機 WordPress。資料仍保留在 wp-local-data/ 與 Docker volume。"
echo "下次再跑 ./local-up.sh 即可。"
echo "若要連資料一起刪除： docker compose down -v && rm -rf wp-local-data"
