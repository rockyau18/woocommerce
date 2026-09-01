#!/usr/bin/env python3
"""Download real stock photos and optimize to WebP + JPEG."""
import io
import os
import urllib.request
from PIL import Image

OUT = os.path.join(os.path.dirname(__file__), "..", "assets", "images")
os.makedirs(OUT, exist_ok=True)

# Real Unsplash photography — international/Western catering focus
IMAGES = {
    "hero": ("photo-1517248135467-4c7edcad34c4", 1600),       # elegant restaurant
    "canapes": ("photo-1604329760661-e71dc83f8f26", 900),     # fine dining plates
    "seafood": ("photo-1467003909585-2f8a72700288", 900),     # salmon dish
    "desserts": ("photo-1488477181946-6428a0291777", 900),    # dessert spread
    "buffet": ("photo-1540189549336-e6e99c3679fe", 900),      # fresh buffet
    "wedding": ("photo-1519677100203-a0e668c92439", 900),     # wedding reception
    "cocktails": ("photo-1514362545857-3bc16c4c7d1b", 900),   # cocktails
    "bar": ("photo-1470337458703-46ad1756a187", 900),         # bartender
    "corporate-event": ("photo-1492684223066-81342ee5ff30", 1200),
    "garden-party": ("photo-1530103862676-de8c9debad1d", 1200),
    "rooftop-event": ("photo-1464366400600-7168b8af9bc3", 1200),
    "plated": ("photo-1546069901-ba9599a7e63c", 900),         # colourful bowl
    "steak": ("photo-1600891964092-4316c288032e", 900),       # steak main
    "spread": ("photo-1551218808-94e220e084d2", 900),         # brunch spread
    "team-chef": ("photo-1556910103-1c02745aae4d", 700),      # chef cooking
    "team-events": ("photo-1560250097-0b93528c311a", 700),     # professional woman
    "team-sommelier": ("photo-1507003211169-0a1dd7228f2d", 700),
    "team-ops": ("photo-1556909114-f6e7ad7d3136", 700),       # professional in kitchen
}

def download(name, photo_id, width):
    url = f"https://images.unsplash.com/{photo_id}?auto=format&fit=crop&w={width}&q=80"
    print(f"Downloading {name}...")
    req = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0"})
    with urllib.request.urlopen(req, timeout=30) as resp:
        data = resp.read()
    img = Image.open(io.BytesIO(data)).convert("RGB")

    jpg_path = os.path.join(OUT, f"{name}.jpg")
    img.save(jpg_path, "JPEG", quality=78, optimize=True, progressive=True)

    webp_path = os.path.join(OUT, f"{name}.webp")
    img.save(webp_path, "WEBP", quality=75, method=6)

    jpg_kb = os.path.getsize(jpg_path) // 1024
    webp_kb = os.path.getsize(webp_path) // 1024
    print(f"  {name}: jpg={jpg_kb}KB webp={webp_kb}KB")
    return jpg_kb, webp_kb

if __name__ == "__main__":
    total_jpg = total_webp = 0
    for name, (pid, w) in IMAGES.items():
        j, w_ = download(name, pid, w)
        total_jpg += j
        total_webp += w_
    print(f"\nTotal: jpg={total_jpg}KB webp={total_webp}KB")
