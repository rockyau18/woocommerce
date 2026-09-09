<?php
/* Template Name: Services Overview */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image('corporate-gala.jpg', 'Lumina Catering services', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="nav.services">Services</span></p>
    <p class="eyebrow" data-i18n="services.eyebrow">Our Services</p>
    <h1 data-i18n="svclist.title">Catering Built Around Your Occasion</h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="services.lead">Whether it's a corporate gala, dream wedding, or private celebration — we bring the same passion and precision to every event.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="services-grid">
      <article class="service-card featured reveal">
        <div class="service-card-image"><?php lumina_image('corporate-gala.jpg', 'Corporate events', ['sizes' => '(max-width: 768px) 100vw, 66vw']); ?></div>
        <div class="service-card-body">
          <h3 data-i18n="services.corporate.title">Corporate Events</h3>
          <p data-i18n="services.corporate.desc">Impress clients and colleagues with refined dining at conferences, product launches, and annual dinners.</p>
          <a href="<?php echo esc_url(home_url('/corporate-events/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
        </div>
      </article>
      <article class="service-card reveal">
        <div class="service-card-image"><?php lumina_image('wedding-catering.jpg', 'Weddings', ['sizes' => '(max-width: 768px) 100vw, 33vw']); ?></div>
        <div class="service-card-body">
          <h3 data-i18n="services.wedding.title">Weddings</h3>
          <p data-i18n="services.wedding.desc">From cocktail receptions to multi-course banquets — make your special day truly extraordinary.</p>
          <a href="<?php echo esc_url(home_url('/weddings/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
        </div>
      </article>
      <article class="service-card reveal">
        <div class="service-card-image"><?php lumina_image('garden-party.jpg', 'Private celebrations', ['sizes' => '(max-width: 768px) 100vw, 33vw']); ?></div>
        <div class="service-card-body">
          <h3 data-i18n="services.private.title">Private Celebrations</h3>
          <p data-i18n="services.private.desc">Birthdays, anniversaries, and garden parties styled with elegance and warmth.</p>
          <a href="<?php echo esc_url(home_url('/private-celebrations/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
        </div>
      </article>
      <article class="service-card reveal">
        <div class="service-card-image"><?php lumina_image('bar-service.jpg', 'Bar service', ['sizes' => '(max-width: 768px) 100vw, 33vw']); ?></div>
        <div class="service-card-body">
          <h3 data-i18n="services.bar.title">Bar & Beverage</h3>
          <p data-i18n="services.bar.desc">Professional bartenders, signature cocktails, and full bar setups — licensed and insured.</p>
          <a href="<?php echo esc_url(home_url('/bar-service/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
        </div>
      </article>
      <article class="service-card reveal">
        <div class="service-card-image"><?php lumina_image('full-service.jpg', 'Full-service catering', ['sizes' => '(max-width: 768px) 100vw, 33vw']); ?></div>
        <div class="service-card-body">
          <h3 data-i18n="services.full.title">Full-Service Catering</h3>
          <p data-i18n="services.full.desc">Complete event catering with chefs, servers, rentals, and on-site coordination.</p>
          <a href="<?php echo esc_url(home_url('/full-service/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
        </div>
      </article>
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
