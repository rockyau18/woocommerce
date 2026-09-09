<?php
/**
 * Lumina Catering theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

define('LUMINA_THEME_VERSION', '1.0.0');

require_once get_template_directory() . '/inc/setup.php';

function lumina_asset($path)
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

function lumina_img($file)
{
    return esc_url(lumina_asset('images/' . ltrim($file, '/')));
}

function lumina_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
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
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Noto+Sans+TC:wght@400;500;600&family=Noto+Serif+TC:wght@500;600&family=Outfit:wght@300;400;500;600&display=swap',
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

    $page_scripts = [];
    if (is_page_template('templates/page-menu.php') || is_page('menu')) {
        $page_scripts[] = 'pages';
    }
    if (is_page_template('templates/page-about.php') || is_page('about')) {
        $page_scripts[] = 'pages';
    }
    if (is_page_template('templates/page-blog.php') || is_home() || is_page('blog')) {
        $page_scripts[] = 'pages';
    }
    if (is_page_template('templates/page-bar-service.php') || is_page('bar-service')) {
        $page_scripts[] = 'bar-service';
    }

    $page_scripts = array_unique($page_scripts);
    foreach ($page_scripts as $handle) {
        wp_enqueue_script(
            'lumina-' . $handle,
            lumina_asset('js/' . $handle . '.js'),
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
    echo '<style>
      .admin-bar .site-header { top: 32px; }
      @media (max-width: 782px) { .admin-bar .site-header { top: 46px; } }
      .form-notice { margin-top: 1rem; padding: 0.9rem 1rem; border-radius: 8px; font-size: 0.9rem; }
      .form-notice.success { background: #e8f6ee; color: #1c5c38; }
      .form-notice.error { background: #fdecea; color: #8a1f11; }
    </style>';
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

function lumina_body_classes($classes)
{
    $classes[] = 'lumina-theme';
    return $classes;
}
add_filter('body_class', 'lumina_body_classes');
