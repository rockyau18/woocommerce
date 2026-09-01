#!/usr/bin/env python3
"""Patch HTML files with optimized WebP picture elements."""
import os
import re

ROOT = os.path.join(os.path.dirname(__file__), "..")

def picture(base, alt, eager=False, prefix="assets/images/"):
    lazy = 'loading="eager" fetchpriority="high"' if eager else 'loading="lazy" decoding="async"'
    return (
        f'<picture><source srcset="{prefix}{base}.webp" type="image/webp">'
        f'<img src="{prefix}{base}.jpg" alt="{alt}" {lazy}></picture>'
    )

# (old_filename_without_ext, new_base, alt)
REPLACEMENTS = [
    ("hero-hk-food", "hero", "Premium catering in Hong Kong"),
    ("food-dimsum-canapes", "spread", "Gourmet catering spread"),
    ("scene-corporate-gala", "corporate-event", "Corporate event catering"),
    ("food-wedding-banquet", "wedding", "Wedding reception catering"),
    ("scene-garden-party", "garden-party", "Garden party catering"),
    ("food-cocktail-canapes", "cocktails", "Cocktail and canapé service"),
    ("food-corporate-buffet", "buffet", "Full-service buffet catering"),
    ("food-seafood", "seafood", "Fresh seafood dish"),
    ("scene-rooftop-wedding", "rooftop-event", "Rooftop event catering"),
    ("food-desserts", "desserts", "Dessert selection"),
    ("team-chefs", "team-chef", "Executive chef"),
    ("team-coordinator", "team-events", "Event director"),
    ("hero-bar", "bar", "Bar service"),
    ("bar-service", "bar", "Professional bartender"),
    ("corporate-catering", "corporate-event", "Corporate catering"),
    ("private-events", "garden-party", "Private event"),
    ("wedding-catering", "wedding", "Wedding catering"),
]

def patch_file(path):
    with open(path) as f:
        content = f.read()

    # Determine prefix depth
    rel = os.path.relpath(path, ROOT)
    prefix = "../assets/images/" if rel.startswith("services/") else "assets/images/"

    for old, new, alt in REPLACEMENTS:
        # Match img tags with old filename
        pattern = rf'<img\s+src="[^"]*{old}\.jpg"[^>]*>'
        rep = picture(new, alt, eager=(old == "hero-hk-food"), prefix=prefix)
        content = re.sub(pattern, rep, content)

    # Add performance.css if missing
    if "performance.css" not in content:
        content = content.replace(
            '<link rel="stylesheet" href="css/style.css">',
            '<link rel="stylesheet" href="css/style.css">\n  <link rel="stylesheet" href="css/performance.css">',
        )
        content = content.replace(
            '<link rel="stylesheet" href="../css/style.css">',
            '<link rel="stylesheet" href="../css/style.css">\n  <link rel="stylesheet" href="../css/performance.css">',
        )

    # Preload hero on index
    if "index.html" in path and "preload" not in content:
        content = content.replace(
            '<link rel="stylesheet" href="css/performance.css">',
            '<link rel="preload" as="image" href="assets/images/hero.webp" type="image/webp">\n  <link rel="stylesheet" href="css/performance.css">',
        )

    with open(path, "w") as f:
        f.write(content)
    print(f"Patched {rel}")

for dirpath, _, files in os.walk(ROOT):
    for fn in files:
        if fn.endswith(".html"):
            patch_file(os.path.join(dirpath, fn))
