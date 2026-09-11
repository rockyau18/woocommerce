<?php
/* Template Name: Contact */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image('hero-bar.jpg', 'Contact Lumina Catering', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="nav.contact">Contact</span></p>
    <p class="eyebrow" data-i18n="contact.eyebrow">Get in Touch</p>
    <h1 data-i18n="contact.title">Let's Plan Something Extraordinary</h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="contact.lead">Tell us about your event and our team will respond within 24 hours with a tailored proposal.</p>
  </div>
</section>
<?php get_template_part('template-parts/contact-section'); ?>
<?php get_footer(); ?>
