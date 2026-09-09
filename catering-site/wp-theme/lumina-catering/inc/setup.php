<?php
/**
 * One-time content replacement when Lumina Catering is activated.
 */
if (!defined('ABSPATH')) {
    exit;
}

function lumina_create_page($title, $slug, $template, $content = '')
{
    $existing = get_page_by_path($slug);
    if ($existing) {
        $id = $existing->ID;
        wp_update_post([
            'ID'           => $id,
            'post_title'   => $title,
            'post_status'  => 'publish',
            'post_content' => $content,
        ]);
    } else {
        $id = wp_insert_post([
            'post_title'   => $title,
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => $content,
        ]);
    }
    if ($id && !is_wp_error($id) && $template) {
        update_post_meta($id, '_wp_page_template', $template);
    }
    return (int) $id;
}

function lumina_replace_site_content()
{
    $front_id = lumina_create_page('Home', 'home', '');
    $menu_id  = lumina_create_page('Menu', 'menu', 'templates/page-menu.php');
    $about_id = lumina_create_page('About', 'about', 'templates/page-about.php');
    $blog_id  = lumina_create_page('Blog', 'blog', 'templates/page-blog.php');
    lumina_create_page('Bar Service', 'bar-service', 'templates/page-bar-service.php');
    lumina_create_page(
        'Privacy Policy',
        'privacy-policy',
        '',
        '<p>This is a prototype privacy policy for Lumina Catering HK. Replace with your legal copy before launch.</p>'
    );
    lumina_create_page(
        'Terms of Service',
        'terms',
        '',
        '<p>This is a prototype terms of service page for Lumina Catering HK. Replace with your legal copy before launch.</p>'
    );

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_id);
    update_option('page_for_posts', 0);
    update_option('blogname', 'Lumina Catering HK');
    update_option('blogdescription', 'Premium catering and bar services across Hong Kong');
    update_option('timezone_string', 'Asia/Hong_Kong');
    update_option('permalink_structure', '/%postname%/');

    $keep = ['home', 'menu', 'about', 'blog', 'bar-service', 'privacy-policy', 'terms'];
    $pages = get_posts([
        'post_type'      => 'page',
        'post_status'    => 'any',
        'posts_per_page' => -1,
    ]);
    foreach ($pages as $page) {
        if (!in_array($page->post_name, $keep, true)) {
            wp_trash_post($page->ID);
        }
    }

    $posts = get_posts([
        'post_type'      => 'post',
        'post_status'    => 'any',
        'posts_per_page' => -1,
    ]);
    foreach ($posts as $post) {
        wp_trash_post($post->ID);
    }

    if (post_type_exists('product')) {
        $products = get_posts([
            'post_type'      => 'product',
            'post_status'    => 'any',
            'posts_per_page' => -1,
            'fields'         => 'ids',
        ]);
        foreach ($products as $product_id) {
            wp_trash_post($product_id);
        }
    }
}
add_action('after_switch_theme', 'lumina_replace_site_content');
