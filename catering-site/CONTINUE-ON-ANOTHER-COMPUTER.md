# 換電腦繼續 Lumina 專案

## 先講清楚：對話會不會自動跟著走？

**目前不會。** Cursor 官方尚未提供「本機 Agent／Chat 完整雲端同步到另一台電腦」。  
Local 對話存在這台機器（例如 `~/.cursor/projects/.../agent-transcripts/`），**同一帳號登入也不保證**另一台看得到同一串 Local chat。

| 會跟著走 | 不會自動跟著走 |
|---|---|
| Git 裡的程式／主題／相冊（push 後） | Local Agent／Chat 完整歷史 UI |
| 線上審核站標記（`/photo-review/`） | 本機 SSH 私鑰、`config.php` 密碼 |
| GitHub PR／分支 | Docker `wp-local-data/`（本機資料庫） |

**可行替代（建議）：**
1. 重要進度寫進本檔與 `HANDOFF.md`（已進 git）  
2. 新電腦用**同一 Cursor 帳號** → clone → 開**新對話**，第一句貼 `HANDOFF.md`  
3. 若要用雲端跑 agent：在 Cursor 開 **Cloud Agent**（改的是 remote repo，不靠本機 Docker）  
4. （進階、非官方）自行用 iCloud／Syncthing 同步 `~/.cursor/projects/...` — 路徑不同常對不上，**不建議當正式方案**

---

## 新電腦一鍵載入（程式碼）

### A. 已安裝 Cursor + git +（可選）Docker

```bash
# 1) clone（若尚未有）
git clone https://github.com/rockyau18/woocommerce.git
cd woocommerce
git checkout cursor/wp-theme-deploy-ce8a
git pull

# 2) 跑引導腳本
bash catering-site/scripts/bootstrap-new-machine.sh
```

腳本會：檢查分支、提醒缺的 secret、可選啟動本機 Docker。

### B. 在 Cursor 裡

1. File → Open Folder → 選剛 clone 的 `woocommerce`（或至少含 `catering-site/` 的目錄）  
2. 同一帳號登入 Cursor  
3. 開新 Agent，貼：

```text
請先讀 catering-site/HANDOFF.md，接續 Lumina Catering 主題與 photo-review 工作。
```

---

## 本機機密（每台電腦各自設）

1. **SiteGround SSH**  
   把已授權的 `~/.ssh/id_ed25519` 安全拷到新電腦，或新產生公鑰加到 SiteGround。

2. **photo-review 密碼檔**

```bash
cp catering-site/photo-review/config.sample.php catering-site/photo-review/config.php
# 編輯 password，與線上一致（現況請看你本機舊電腦的 config.php，勿提交 git）
```

3. **本機預覽**

```bash
cd catering-site/wp-theme
./local-up.sh    # http://localhost:8090
```

4. **部署**

```bash
./deploy-photo-review.sh   # 審核站
./deploy.sh                # 主題（也會觸發 photo-review）
```

---

## 線上入口（不依賴本機對話）

- 網站：https://yaul12.sg-host.com  
- 審核：https://yaul12.sg-host.com/photo-review/  
- GitHub：https://github.com/rockyau18/woocommerce/tree/cursor/wp-theme-deploy-ce8a  
