<?php
/**
 * Lumina Catering theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('LUMINA_THEME_VERSION', '1.1.0');

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/services.php';

function lumina_asset($path)
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

function lumina_image_sources($file)
{
    $base = pathinfo($file, PATHINFO_FILENAME);
    $dir  = get_template_directory() . '/assets/images';
    $hits = glob($dir . '/' . $base . '-*.webp') ?: [];
    $sources = [];
    foreach ($hits as $abs) {
        if (preg_match('/-(\d+)\.webp$/', $abs, $m)) {
            $sources[(int) $m[1]] = lumina_asset('images/' . basename($abs));
        }
    }
    ksort($sources);
    return $sources;
}

function lumina_img($file)
{
    $sources = lumina_image_sources($file);
    if ($sources) {
        return esc_url(end($sources));
    }
    return esc_url(lumina_asset('images/' . ltrim($file, '/')));
}

function lumina_image($file, $alt = '', $args = [])
{
    $sources = lumina_image_sources($file);
    $src     = $sources ? end($sources) : lumina_asset('images/' . ltrim($file, '/'));
    $srcset  = [];
    foreach ($sources as $width => $url) {
        $srcset[] = $url . ' ' . $width . 'w';
    }

    $eager = !empty($args['eager']);
    $sizes = $args['sizes'] ?? '(max-width: 768px) 100vw, 50vw';
    $class = $args['class'] ?? '';

    $abs = get_template_directory() . '/assets/images/' . pathinfo($file, PATHINFO_FILENAME) . '-' . (array_key_last($sources) ?: '1600') . '.webp';
    $dim = is_readable($abs) ? @getimagesize($abs) : false;
    $width  = $args['width']  ?? ($dim[0] ?? 1536);
    $height = $args['height'] ?? ($dim[1] ?? 1024);

    $attrs = [
        'src="' . esc_url($src) . '"',
        'alt="' . esc_attr($alt) . '"',
        'width="' . (int) $width . '"',
        'height="' . (int) $height . '"',
        'decoding="async"',
        'loading="' . ($eager ? 'eager' : 'lazy') . '"',
    ];
    if ($srcset) {
        $attrs[] = 'srcset="' . esc_attr(implode(', ', $srcset)) . '"';
        $attrs[] = 'sizes="' . esc_attr($sizes) . '"';
    }
    if ($eager) {
        $attrs[] = 'fetchpriority="high"';
    }
    if ($class) {
        $attrs[] = 'class="' . esc_attr($class) . '"';
    }

    echo '<img ' . implode(' ', $attrs) . '>';
}

function lumina_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    register_nav_menus([
        'primary' => __('Primary Menu', 'lumina-catering'),
        'footer'  => __('Footer Menu', 'lumina-catering'),
    ]);
}
add_action('after_setup_theme', 'lumina_setup');

function lumina_assets()
{
    wp_enqueue_style(
        'lumina-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600&family=Noto+Sans+TC:wght@400;500&family=Noto+Serif+TC:wght@500&family=Outfit:wght@400;500;600&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'lumina-theme',
        lumina_asset('css/style.css'),
        ['lumina-fonts'],
        LUMINA_THEME_VERSION
    );

    wp_enqueue_script(
        'lumina-main',
        lumina_asset('js/main.js'),
        [],
        LUMINA_THEME_VERSION,
        true
    );

    wp_enqueue_script(
        'lumina-pages',
        lumina_asset('js/pages.js'),
        ['lumina-main'],
        LUMINA_THEME_VERSION,
        true
    );

    wp_enqueue_script(
        'lumina-extra',
        lumina_asset('js/extra-pages.js'),
        ['lumina-main'],
        LUMINA_THEME_VERSION,
        true
    );

    if (is_page_template('templates/page-bar-service.php') || is_page('bar-service')) {
        wp_enqueue_script(
            'lumina-bar-service',
            lumina_asset('js/bar-service.js'),
            ['lumina-main'],
            LUMINA_THEME_VERSION,
            true
        );
    }

    wp_localize_script('lumina-main', 'luminaAjax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('lumina_inquiry'),
    ]);
}
add_action('wp_enqueue_scripts', 'lumina_assets');

function lumina_font_display($html, $handle)
{
    if ($handle !== 'lumina-fonts') {
        return $html;
    }
    $noscript = $html;
    $html = str_replace("media='all'", "media='print' onload=\"this.media='all'\"", $html);
    $html = str_replace('media="all"', 'media="print" onload="this.media=\'all\'"', $html);
    return $html . '<noscript>' . $noscript . '</noscript>';
}
add_filter('style_loader_tag', 'lumina_font_display', 10, 2);

function lumina_resource_hints()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

    $preload = null;
    if (is_front_page()) {
        $preload = lumina_img('hero-bar.jpg');
    } elseif (is_page_template('templates/page-menu.php') || is_page('menu')) {
        $preload = lumina_img('buffet-station.jpg');
    } elseif (is_page_template('templates/page-about.php') || is_page('about')) {
        $preload = lumina_img('full-service.jpg');
    } elseif (is_page_template('templates/page-blog.php') || is_page('blog')) {
        $preload = lumina_img('rooftop-wedding.jpg');
    } elseif (is_page_template('templates/page-gallery.php') || is_page('gallery')) {
        $preload = lumina_img('rooftop-wedding.jpg');
    } elseif (is_page_template('templates/page-service.php')) {
        $cfg = lumina_current_service();
        if ($cfg) {
            $preload = lumina_img($cfg['hero']);
        }
    } elseif (is_page_template('templates/page-bar-service.php') || is_page('bar-service')) {
        $preload = lumina_img('cocktail-reception.jpg');
    }

    if ($preload) {
        echo '<link rel="preload" as="image" href="' . esc_url($preload) . '" fetchpriority="high">' . "\n";
    }
}
add_action('wp_head', 'lumina_resource_hints', 1);

function lumina_disable_woocommerce_styles()
{
    add_filter('woocommerce_enqueue_styles', '__return_empty_array');
    wp_dequeue_style('woocommerce-general');
    wp_dequeue_style('woocommerce-layout');
    wp_dequeue_style('woocommerce-smallscreen');
    wp_dequeue_script('woocommerce');
    wp_dequeue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'lumina_disable_woocommerce_styles', 99);

function lumina_admin_bar_css()
{
    if (!is_admin_bar_showing()) {
        return;
    }
    echo '<style>.admin-bar .site-header{top:32px;}@media(max-width:782px){.admin-bar .site-header{top:46px;}}</style>';
}
add_action('wp_head', 'lumina_admin_bar_css');

function lumina_inquiry_handler()
{
    check_ajax_referer('lumina_inquiry', 'nonce');

    $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $event   = sanitize_text_field(wp_unslash($_POST['event_type'] ?? ''));
    $guests  = sanitize_text_field(wp_unslash($_POST['guests'] ?? ''));
    $date    = sanitize_text_field(wp_unslash($_POST['event_date'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    if ($name === '' || !is_email($email)) {
        wp_send_json_error(['message' => 'Please provide a valid name and email.'], 400);
    }

    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nEvent: {$event}\nGuests: {$guests}\nDate: {$date}\n\n{$message}";
    $sent = wp_mail(get_option('admin_email'), 'Lumina Catering inquiry from ' . $name, $body, [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ]);

    if (!$sent) {
        wp_send_json_error(['message' => 'Unable to send right now. Please WhatsApp or email us.'], 500);
    }

    wp_send_json_success(['message' => 'Thank you! We will be in touch within 24 hours.']);
}
add_action('wp_ajax_lumina_inquiry', 'lumina_inquiry_handler');
add_action('wp_ajax_nopriv_lumina_inquiry', 'lumina_inquiry_handler');
