# Lumina Catering — 本機測試 → 再上傳

主題目錄：`lumina-catering/`
線上測試站：https://yaul12.sg-host.com

## 本機啟動（建議）

需要 [Docker Desktop](https://www.docker.com/products/docker-desktop/)。

```bash
cd catering-site/wp-theme
chmod +x local-up.sh local-down.sh deploy.sh
./local-up.sh
```

然後打開：

| | |
|---|---|
| 前台 | http://localhost:8090 |
| 後台 | http://localhost:8090/wp-admin |
| 帳號 | `admin` |
| 密碼 | `admin` |

改 `lumina-catering/` 裡的 PHP / CSS / JS / 圖片，瀏覽器強制重新整理即可看到。主題是掛載進容器的，**不用每次 rebuild**。

停止：

```bash
./local-down.sh
```

## 測完再上傳到 SiteGround

確認本機 http://localhost:8090 沒問題後：

```bash
cd catering-site/wp-theme
./deploy.sh
```

會把 `lumina-catering/` 同步到 https://yaul12.sg-host.com（需要本機已設定 SiteGround SSH 金鑰）。

## 沒有 Docker 時

把整個 `lumina-catering` 資料夾複製到本機 WordPress 的：

`wp-content/themes/lumina-catering`

後台啟用 **Lumina Catering** 主題即可。頁面會自動建立。

## 頁面

- 首頁 `/`
- 服務總覽 `/services/`
- 企業 `/corporate-events/`、婚禮 `/weddings/`、私人慶典 `/private-celebrations/`、全方位 `/full-service/`、酒吧 `/bar-service/`
- 菜單 `/menu/`、作品集 `/gallery/`、關於 `/about/`、博客 `/blog/`、聯絡 `/contact/`
