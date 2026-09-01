#!/usr/bin/env python3
"""Update image paths across catering site HTML files."""
import os
import re

ROOT = os.path.join(os.path.dirname(__file__), "..")

REPLACEMENTS = {
    "food-dimsum-canapes.jpg": "gourmet-canapes.jpg",
    "food-wedding-banquet.jpg": "wedding-catering.jpg",
    "food-seafood.jpg": "buffet-station.jpg",
    "food-desserts.jpg": "dessert-table.jpg",
    "food-cocktail-canapes.jpg": "cocktail-reception.jpg",
    "food-corporate-buffet.jpg": "buffet-station.jpg",
    "scene-rooftop-wedding.jpg": "rooftop-wedding.jpg",
    "scene-corporate-gala.jpg": "corporate-gala.jpg",
    "scene-garden-party.jpg": "garden-party.jpg",
    "team-chefs.jpg": "team-chef.jpg",
    "team-coordinator.jpg": "team-events.jpg",
    "hero-hk-food.jpg": "corporate-gala.jpg",
}

# menu.html item images in order (14 items)
MENU_ITEMS = [
    "gourmet-canapes.jpg",
    "cocktail-reception.jpg",
    "buffet-station.jpg",
    "rooftop-wedding.jpg",
    "corporate-gala.jpg",
    "garden-party.jpg",
    "full-service.jpg",
    "wedding-catering.jpg",
    "dessert-table.jpg",
    "charity-gala.jpg",
    "product-launch.jpg",
    "bar-service.jpg",
    "hero-bar.jpg",
    "private-events.jpg",
]

MENU_SHOWCASE = [
    "gourmet-canapes.jpg",
    "dessert-table.jpg",
    "wedding-catering.jpg",
    "cocktail-reception.jpg",
    "full-service.jpg",
]

BLOG_POSTS = [
    "rooftop-wedding.jpg",
    "corporate-gala.jpg",
    "garden-party.jpg",
    "product-launch.jpg",
    "corporate-catering.jpg",
    "charity-gala.jpg",
]

BLOG_SHOWCASE = [
    "gourmet-canapes.jpg",
    "dessert-table.jpg",
    "buffet-station.jpg",
    "cocktail-reception.jpg",
    "full-service.jpg",
]

ABOUT_SHOWCASE = [
    "gourmet-canapes.jpg",
    "rooftop-wedding.jpg",
    "dessert-table.jpg",
    "cocktail-reception.jpg",
    "buffet-station.jpg",
]


def replace_all(content):
    for old, new in REPLACEMENTS.items():
        content = content.replace(old, new)
    return content


def replace_showcase(content, images, class_name="food-showcase-item"):
    pattern = rf'(<div class="{class_name}"><img src="assets/images/)[^"]+(")'
    i = 0

    def sub(m):
        nonlocal i
        img = images[i % len(images)]
        i += 1
        return f'{m.group(1)}{img}{m.group(2)}'

    return re.sub(pattern, sub, content)


def replace_menu_items(content):
    pattern = r'(<div class="menu-item-image"><img src="assets/images/)[^"]+(")'
    i = 0

    def sub(m):
        nonlocal i
        img = MENU_ITEMS[i % len(MENU_ITEMS)]
        i += 1
        return f'{m.group(1)}{img}{m.group(2)}'

    return re.sub(pattern, sub, content)


def replace_blog_posts(content):
    pattern = r'(<div class="blog-card-image">\s*<img src="assets/images/)[^"]+(")'
    i = 0

    def sub(m):
        nonlocal i
        img = BLOG_POSTS[i % len(BLOG_POSTS)]
        i += 1
        return f'{m.group(1)}{img}{m.group(2)}'

    return re.sub(pattern, sub, content)


for dirpath, _, files in os.walk(ROOT):
    for fn in files:
        if not fn.endswith(".html"):
            continue
        path = os.path.join(dirpath, fn)
        rel = os.path.relpath(path, ROOT)
        with open(path) as f:
            content = f.read()

        content = replace_all(content)

        if fn == "menu.html":
            content = content.replace(
                'src="assets/images/gourmet-canapes.jpg" alt="Gourmet catering menu',
                'src="assets/images/buffet-station.jpg" alt="Gourmet catering menu',
                1,
            )
            content = replace_showcase(content, MENU_SHOWCASE)
            content = replace_menu_items(content)
        elif fn == "about.html":
            content = content.replace(
                'src="assets/images/team-chef.jpg" alt="Lumina Catering chef team',
                'src="assets/images/full-service.jpg" alt="Lumina Catering event team',
                1,
            )
            content = content.replace(
                'src="assets/images/bar-service.jpg" alt="Daniel Chan"',
                'src="assets/images/team-sommelier.jpg" alt="Daniel Chan"',
            )
            content = content.replace(
                'src="assets/images/team-events.jpg" alt="Amy Wong"',
                'src="assets/images/team-ops.jpg" alt="Amy Wong"',
            )
            content = replace_showcase(content, ABOUT_SHOWCASE)
        elif fn == "blog.html":
            content = content.replace(
                'src="assets/images/rooftop-wedding.jpg" alt="Rooftop wedding catering',
                'src="assets/images/rooftop-wedding.jpg" alt="Rooftop wedding catering',
                1,
            )
            content = replace_blog_posts(content)
            content = replace_showcase(content, BLOG_SHOWCASE)
        elif fn == "index.html":
            pass  # handled separately
        elif fn == "bar-service.html":
            content = content.replace("../assets/images/hero-bar.jpg", "../assets/images/cocktail-reception.jpg", 1)
            content = content.replace("../assets/images/hero-bar.jpg", "../assets/images/full-service.jpg")

        with open(path, "w") as f:
            f.write(content)
        print(f"Updated {rel}")
