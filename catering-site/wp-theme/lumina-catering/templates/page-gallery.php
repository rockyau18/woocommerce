<?php
/* Template Name: Gallery */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image('rooftop-wedding.jpg', 'Lumina Catering gallery', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="nav.gallery">Gallery</span></p>
    <p class="eyebrow" data-i18n="gallery.eyebrow">Portfolio</p>
    <h1 data-i18n="gallery.title">Moments We've Created</h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="gallerypage.lead">A look at recent weddings, galas, and private events across Hong Kong.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="gallery-grid reveal">
      <div class="gallery-item"><?php lumina_image('rooftop-wedding.jpg', 'Rooftop wedding catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
      <div class="gallery-item"><?php lumina_image('cocktail-reception.jpg', 'Cocktail reception', ['sizes' => '(max-width: 768px) 100vw, 25vw']); ?></div>
      <div class="gallery-item"><?php lumina_image('dessert-table.jpg', 'Dessert table', ['sizes' => '(max-width: 768px) 100vw, 25vw']); ?></div>
      <div class="gallery-item"><?php lumina_image('buffet-station.jpg', 'Buffet station', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
      <div class="gallery-item"><?php lumina_image('charity-gala.jpg', 'Charity gala dinner', ['sizes' => '(max-width: 768px) 100vw, 25vw']); ?></div>
    </div>
  </div>
</section>

<section class="section" style="background: var(--color-surface); padding-top: 0;">
  <div class="container">
    <div class="food-showcase reveal">
      <div class="food-showcase-item"><?php lumina_image('gourmet-canapes.jpg', 'Canapés', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
      <div class="food-showcase-item"><?php lumina_image('wedding-catering.jpg', 'Wedding banquet', ['sizes' => '(max-width: 768px) 50vw, 25vw']); ?></div>
      <div class="food-showcase-item"><?php lumina_image('garden-party.jpg', 'Garden party', ['sizes' => '(max-width: 768px) 50vw, 25vw']); ?></div>
      <div class="food-showcase-item"><?php lumina_image('product-launch.jpg', 'Product launch', ['sizes' => '(max-width: 768px) 50vw, 25vw']); ?></div>
      <div class="food-showcase-item"><?php lumina_image('private-events.jpg', 'Private event', ['sizes' => '(max-width: 768px) 50vw, 25vw']); ?></div>
    </div>
  </div>
</section>

<section class="section contact-section" style="padding: 4rem 0;">
  <div class="container" style="text-align:center;">
    <h2 data-i18n="contact.title">Let's Plan Something Extraordinary</h2>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" style="margin-top:1.5rem;" data-i18n="nav.cta">Get a Quote</a>
  </div>
</section>
<?php get_footer(); ?>
