# Lumina Catering — Agent 交接（HANDOFF）

更新日期：2026-09-11

## 專案
- GitHub：`rockyau18/woocommerce`（fork；只動 `catering-site/`）
- 分支：`cursor/wp-theme-deploy-ce8a`
- 主題：`catering-site/wp-theme/lumina-catering/`
- 品牌：Lumina Catering / 朗宴餐飲（聯絡資料佔位）
- 語言：預設英文 + 繁中（data-i18n）

## 環境
- 本機 Docker：`catering-site/wp-theme/./local-up.sh` → http://localhost:8090（admin/admin）
- 線上：https://yaul12.sg-host.com
- 相片審核（共用密碼）：https://yaul12.sg-host.com/photo-review/
- 部署主題：`./deploy.sh`；只部署審核：`./deploy-photo-review.sh`
- SSH：`~/.ssh/id_ed25519` → SiteGround（不要 commit 私鑰／`photo-review/config.php`）

## 相片流程
- 候選圖：`catering-site/photo-library/`（本地預覽 `index.html`）
- 線上審核：標記寫伺服器；「依圖檔」標不合格會連動所有「出現位置」
- 換圖仍在本機做 WebP → 主題 → local 測 → deploy

## 最近完成
- HTML→WP 主題、WebP、本機 Docker、SiteGround deploy
- photo-library + 線上 photo-review（共用密碼）
- 網站現用相：依圖檔去重連動出現位置標記

## 新對話請先做
1. `git checkout cursor/wp-theme-deploy-ce8a && git pull`
2. 讀本檔與 `CONTINUE-ON-ANOTHER-COMPUTER.md`
3. 不要改 WooCommerce core；只動 `catering-site/`
4. 改前端記得 bump `LUMINA_THEME_VERSION`
