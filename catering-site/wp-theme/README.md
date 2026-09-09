# Lumina Catering — WordPress theme

Custom bilingual theme converted from the HTML prototype in `catering-site/`.

## Pages

- Home (`front-page.php`)
- Menu (`templates/page-menu.php`)
- About (`templates/page-about.php`)
- Blog & Cases (`templates/page-blog.php`)
- Bar Service (`templates/page-bar-service.php`)

Activating the theme creates these pages, sets the homepage, updates the site title, and moves unrelated posts/pages (including WooCommerce products) to trash.

## Deploy

```bash
bash catering-site/wp-theme/deploy.sh
```

Requires SSH key access to the SiteGround account.
