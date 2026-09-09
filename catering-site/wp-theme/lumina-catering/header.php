<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header on-dark">
    <div class="header-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">Lumina <span>Catering</span></a>
      <nav class="nav-desktop">
        <a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a>
        <a href="<?php echo esc_url(home_url('/#services')); ?>" data-i18n="nav.services">Services</a>
        <a href="<?php echo esc_url(home_url('/menu/')); ?>" data-i18n="nav.menu">Menu</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" data-i18n="nav.about">About</a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" data-i18n="nav.blog">Blog</a>
        <a href="<?php echo esc_url(home_url('/#contact')); ?>" data-i18n="nav.contact">Contact</a>
      </nav>
      <div class="header-actions">
        <div class="lang-toggle">
          <button type="button" data-lang="en" class="active">EN</button>
          <button type="button" data-lang="zh">中文</button>
        </div>
        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary" data-i18n="nav.cta">Get a Quote</a>
        <button class="menu-toggle" type="button" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <nav class="mobile-nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a>
    <a href="<?php echo esc_url(home_url('/#services')); ?>" data-i18n="nav.services">Services</a>
    <a href="<?php echo esc_url(home_url('/menu/')); ?>" data-i18n="nav.menu">Menu</a>
    <a href="<?php echo esc_url(home_url('/about/')); ?>" data-i18n="nav.about">About</a>
    <a href="<?php echo esc_url(home_url('/blog/')); ?>" data-i18n="nav.blog">Blog</a>
    <a href="<?php echo esc_url(home_url('/#contact')); ?>" data-i18n="nav.contact">Contact</a>
  </nav>
