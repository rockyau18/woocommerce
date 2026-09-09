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
        <div class="nav-item has-sub">
          <a href="<?php echo esc_url(home_url('/services/')); ?>" data-i18n="nav.services">Services</a>
          <div class="nav-sub">
            <a href="<?php echo esc_url(home_url('/services/')); ?>" data-i18n="nav.allservices">All Services</a>
            <a href="<?php echo esc_url(home_url('/corporate-events/')); ?>" data-i18n="services.corporate.title">Corporate Events</a>
            <a href="<?php echo esc_url(home_url('/weddings/')); ?>" data-i18n="services.wedding.title">Weddings</a>
            <a href="<?php echo esc_url(home_url('/private-celebrations/')); ?>" data-i18n="services.private.title">Private Celebrations</a>
            <a href="<?php echo esc_url(home_url('/bar-service/')); ?>" data-i18n="services.bar.title">Bar & Beverage</a>
            <a href="<?php echo esc_url(home_url('/full-service/')); ?>" data-i18n="services.full.title">Full-Service Catering</a>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/menu/')); ?>" data-i18n="nav.menu">Menu</a>
        <a href="<?php echo esc_url(home_url('/gallery/')); ?>" data-i18n="nav.gallery">Gallery</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" data-i18n="nav.about">About</a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" data-i18n="nav.blog">Blog</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" data-i18n="nav.contact">Contact</a>
      </nav>
      <div class="header-actions">
        <div class="lang-toggle">
          <button type="button" data-lang="en" class="active">EN</button>
          <button type="button" data-lang="zh">中文</button>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary" data-i18n="nav.cta">Get a Quote</a>
        <button class="menu-toggle" type="button" aria-label="Menu" aria-expanded="false" aria-controls="mobile-nav">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <nav class="mobile-nav" id="mobile-nav" hidden>
    <div class="mobile-nav-inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a>
      <div class="mobile-nav-group">
        <button type="button" class="mobile-nav-parent" aria-expanded="false" data-i18n="nav.services">Services</button>
        <div class="mobile-nav-children">
          <a href="<?php echo esc_url(home_url('/services/')); ?>" data-i18n="nav.allservices">All Services</a>
          <a href="<?php echo esc_url(home_url('/corporate-events/')); ?>" data-i18n="services.corporate.title">Corporate Events</a>
          <a href="<?php echo esc_url(home_url('/weddings/')); ?>" data-i18n="services.wedding.title">Weddings</a>
          <a href="<?php echo esc_url(home_url('/private-celebrations/')); ?>" data-i18n="services.private.title">Private Celebrations</a>
          <a href="<?php echo esc_url(home_url('/bar-service/')); ?>" data-i18n="services.bar.title">Bar & Beverage</a>
          <a href="<?php echo esc_url(home_url('/full-service/')); ?>" data-i18n="services.full.title">Full-Service Catering</a>
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('/menu/')); ?>" data-i18n="nav.menu">Menu</a>
      <a href="<?php echo esc_url(home_url('/gallery/')); ?>" data-i18n="nav.gallery">Gallery</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>" data-i18n="nav.about">About</a>
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" data-i18n="nav.blog">Blog</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" data-i18n="nav.contact">Contact</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent mobile-nav-cta" data-i18n="nav.cta">Get a Quote</a>
    </div>
  </nav>
