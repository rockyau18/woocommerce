#!/usr/bin/env python3
"""Download event catering photos and optimize to WebP + JPEG."""
import io
import os
import urllib.request
from PIL import Image

OUT = os.path.join(os.path.dirname(__file__), "..", "assets", "images")
os.makedirs(OUT, exist_ok=True)

# Event catering focus — buffets, receptions, guests, venues (not restaurant interiors)
IMAGES = {
    "hero": ("photo-1528605248644-14dd04022da1", 1600),       # group banquet / long-table event
    "spread": ("photo-1511795409834-ef04bbd61622", 1200),      # elegant event table setup
    "buffet": ("photo-1582719478250-c89cae4dc85b", 900),       # hotel / event buffet station
    "canapes": ("photo-1537633552985-df8429e8048b", 900),     # cocktail reception toast
    "cocktails": ("photo-1514362545857-3bc16c4c7d1b", 900),    # cocktails at event
    "bar": ("photo-1470337458703-46ad1756a187", 900),          # bartender at event
    "corporate-event": ("photo-1540575467063-178a50c2df87", 1200),  # conference gala
    "wedding": ("photo-1478146896981-b80fe463b330", 1200),     # wedding reception
    "garden-party": ("photo-1530103862676-de8c9debad1d", 1200),    # outdoor garden party
    "rooftop-event": ("photo-1464366400600-7168b8af9bc3", 1200),    # venue event setup
    "plated": ("photo-1511578314322-379afb476865", 900),       # event space / reception
    "steak": ("photo-1506157786151-b8491531f063", 900),        # outdoor festival / crowd event
    "seafood": ("photo-1540189549336-e6e99c3679fe", 900),      # catering food station
    "desserts": ("photo-1488477181946-6428a0291777", 900),     # dessert display
    "team-chef": ("photo-1556910103-1c02745aae4d", 700),       # chef at event kitchen
    "team-events": ("photo-1560250097-0b93528c311a", 700),
    "team-sommelier": ("photo-1507003211169-0a1dd7228f2d", 700),
    "team-ops": ("photo-1556909114-f6e7ad7d3136", 700),
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

if __name__ == "__main__":
    for name, (pid, w) in IMAGES.items():
        download(name, pid, w)
