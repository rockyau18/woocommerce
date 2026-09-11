# Lumina 線上相片審核（共用密碼）

網址（部署後）：https://yaul12.sg-host.com/photo-review/

## 你本機做什麼
1. 繼續在 `photo-library/` 生圖、更新本地 `index.html`
2. 部署審核站：

```bash
cd catering-site/wp-theme
./deploy-photo-review.sh
```

或完整主題部署時一併部署（見 `deploy.sh`）。

## 同事做什麼
開 `/photo-review/` → 輸入共用密碼 → 標記合格／不合格（寫入伺服器，大家共用）。

## 密碼
存在 `config.php`（已 gitignore）。範本是 `config.sample.php`。
