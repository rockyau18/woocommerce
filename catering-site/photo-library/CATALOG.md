# Lumina 相片冊 v2｜香港到會風格

參考：The Mira 商務宴會、Canapés Room 企業酒會、Day Night 到會擺盤。  
重點：**現場有人、活動燈光、香港場合**（辦公室酒會、酒店宴會廳、燒豬開幕、海鮮塔、公司 Lunch），不是歐式空景靜物。

- 預覽：`index.html`
- 舊西式圖：`_archive-western-v1/`（保留對照，未刪）
- **尚未套用網站**

檔名：`{ID}__英文短名.jpg`

---

## 視覺方向（這版有意加強）

| 要有 | 避免 |
|---|---|
| 賓客／侍應在場 | 無人空桌靜物 |
| 酒店紫／洋紅活動燈光、夜港景 | 歐式白帳花園婚禮 |
| 圓桌婚宴、高腳 cocktail table | 純西式長桌農場風 |
| 海鮮塔、燒豬開幕、公司鋁盤到會 | 只有起司盤／鄉村麵包 |
| 發佈會背板、networking | 餐廳菜色棚拍 |

---

## 候選清單（請用 ID 點名）

### Hero｜首頁

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-hero-01` | 中環辦公室酒會・港景 cocktail | `hero-bar` |
| `hk-hero-02` | 酒店宴會廳活動現場（紫光） | `hero-bar` / `corporate-gala` |

### Corporate｜企業

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-corp-01` | 洋紅燈光企業晚宴 | `corporate-gala` |
| `hk-corp-02` | 產品發佈會接待 | `product-launch` |
| `hk-corp-03` | 開幕燒豬儀式 | `corporate-catering` / gallery |
| `hk-corp-04` | 公司會議 Lunch 到會 | `corporate-catering` |

### Wedding｜婚禮

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-wed-01` | 酒店圓桌中西婚宴 | `wedding-catering` |
| `hk-wed-02` | 維港天台婚禮 cocktail | `rooftop-wedding` |

### Private｜私人

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-priv-01` | 會所私人派對自助到會 | `garden-party` / `private-events` |

### Bar｜酒吧

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-bar-01` | 維港天台酒吧到會 | `bar-service` / `cocktail-reception` |

### Food｜食物站

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-food-01` | 海鮮塔到會 | `gourmet-canapes` / gallery |
| `hk-food-02` | 侍應傳菜 canapé | `gourmet-canapes` / `bar-service` |
| `hk-food-03` | 港式甜品站（蛋撻／芒果布甸等） | `dessert-table` |

### Full service｜全服務

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-full-01` | Live station 廚師現場煮 | `full-service` / `buffet-station` |
| `hk-full-02` | 慈善／大型晚宴全場 | `charity-gala` / `full-service` |

### Finger food｜層架／一口小食（v3 · 參考 Shamrock / La Casa）

| ID | 標籤 | 建議對應 |
|---|---|---|
| `hk-ff-01` | 雙層架三文魚 canapé＋主廚切片 | `gourmet-canapes` |
| `hk-ff-02` | 三層架彩色 finger food 整齊行列 | `gourmet-canapes` / gallery |
| `hk-ff-03` | Pass-around 侍應托盤小食 | `bar-service` / gallery |
| `hk-ff-04` | 白長盤近拍（Parma／蜜瓜風） | menu / gallery |
| `hk-ff-05` | 甜品層架（蛋撻／布甸等） | `dessert-table` |
| `hk-ff-06` | Canapé 盒＋層架 | gallery / menu |
| `hk-ff-07` | 中西融合層架（燒賣杯／鴨卷等） | `gourmet-canapes` |
| `hk-ff-08` | Cocktail 高腳桌＋層架擺盤 | `cocktail-reception` |
| `hk-ff-09` | 熱 Finger food 站＋層架 | `buffet-station` |
| `hk-ff-10` | 長桌多層架 finger food 站 | `full-service` / gallery |

風格重點：亮光、整齊行列、金／黑層架、白長盤、近距離食物質感（非空景歐式婚禮）。

---

## 怎麼說替換

- 「Hero 用 `hk-hero-01`」
- 「企業用 `hk-corp-01` + `hk-corp-04`，婚禮用 `hk-wed-01`」
- 「`hk-corp-03` 太誇張，再出兩張開幕類」

確認後才轉 WebP、寫入主題、本機測、再 deploy。

### Varied scenes v3｜約 30 張多場景（`hk-v3-01`…`hk-v3-30`）
| ID | 標籤 | 資料夾 |
|---|---|---|
| `hk-v3-01` | 辦公室大堂酒會 / Office lobby cocktail | `01-hero` |
| `hk-v3-02` | 宴會廳企業晚宴（有賓客） / Ballroom gala with guests | `02-corporate` |
| `hk-v3-03` | 產品發佈會大堂 / Product launch foyer | `02-corporate` |
| `hk-v3-04` | 會議室公司 Lunch / Boardroom lunch catering | `02-corporate` |
| `hk-v3-05` | 酒店圓桌婚宴 / Hotel wedding banquet | `03-wedding` |
| `hk-v3-06` | 天台婚禮 cocktail / Rooftop wedding cocktail | `03-wedding` |
| `hk-v3-07` | 會所私人派對 / Clubhouse private party | `04-private` |
| `hk-v3-08` | 花園露台晚宴 / Garden terrace dinner | `04-private` |
| `hk-v3-09` | 維港天台酒吧 / Harbour rooftop bar | `05-bar` |
| `hk-v3-10` | 香檳接待 / Champagne reception | `05-bar` |
| `hk-v3-11` | 活動現場海鮮塔 / Seafood tower at event | `06-food-stations` |
| `hk-v3-12` | 畫廊傳菜 pass-around / Gallery pass-around | `06-food-stations` |
| `hk-v3-13` | Live stations 全服務 / Live cooking stations | `07-full-service` |
| `hk-v3-14` | 慈善晚宴全景 / Charity gala wide | `07-full-service` |
| `hk-v3-15` | 開幕燒豬 / Opening roast pig | `02-corporate` |
| `hk-v3-16` | 船河派對到會 / Junk boat party | `09-varied-scenes` |
| `hk-v3-17` | 層架近拍 / Tier stand close-up | `08-finger-food` |
| `hk-v3-18` | 甜品站 / Dessert station | `06-food-stations` |
| `hk-v3-19` | 熱 finger food 盤 / Hot finger platter | `08-finger-food` |
| `hk-v3-20` | 主廚層架擺盤 / Chef plating tiers | `08-finger-food` |
| `hk-v3-21` | 中西融合層架 / Asian fusion canapé tiers | `08-finger-food` |
| `hk-v3-22` | 西式自助長桌 / Western buffet line | `07-full-service` |
| `hk-v3-23` | 中式公司自助 / Chinese office buffet | `02-corporate` |
| `hk-v3-24` | 婚禮 cocktail 擺盤 / Wedding cocktail display | `03-wedding` |
| `hk-v3-25` | 電車／特色場地派對 / Tram/heritage party | `09-varied-scenes` |
| `hk-v3-26` | 博物館／文化中心酒會 / Museum cocktail | `09-varied-scenes` |
| `hk-v3-27` | 泳池畔接待 / Poolside reception | `09-varied-scenes` |
| `hk-v3-28` | 行政位上晚宴 / Executive sit-down | `02-corporate` |
| `hk-v3-29` | 會議茶歇小食 / Tea break canapés | `09-varied-scenes` |
| `hk-v3-30` | 通用層架擺設 / General tier display | `08-finger-food` |

預覽請用 `index.html`（候選／網站現用雙分頁＋合格／不合格標記）。
