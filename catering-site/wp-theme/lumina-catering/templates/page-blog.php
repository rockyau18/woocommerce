<?php
/* Template Name: Blog & Cases */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
    <div class="page-hero-bg">
      <img src="<?php echo lumina_img('rooftop-wedding.jpg'); ?>" alt="Rooftop wedding catering Hong Kong">
    </div>
    <div class="container page-hero-content">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="blog.breadcrumb">Blog & Cases</span></p>
      <p class="eyebrow" data-i18n="blog.eyebrow">Event Stories</p>
      <h1 data-i18n="blog.title">Experiences We've Created</h1>
      <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="blog.lead">Explore our recent events across Hong Kong.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="blog-grid">
        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('rooftop-wedding.jpg'); ?>" alt="IFC rooftop wedding">
            <span class="blog-card-tag" data-i18n="blog.post1.tag">Wedding</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post1.date">August 2026</p>
            <h3 data-i18n="blog.post1.title">Rooftop Wedding at IFC with Harbour Views</h3>
            <p data-i18n="blog.post1.desc">A 180-guest celebration featuring a fusion Cantonese-Western banquet.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('corporate-gala.jpg'); ?>" alt="Corporate gala HKCEC">
            <span class="blog-card-tag" data-i18n="blog.post2.tag">Corporate</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post2.date">July 2026</p>
            <h3 data-i18n="blog.post2.title">Tech Giant Annual Gala at HKCEC</h3>
            <p data-i18n="blog.post2.desc">500-person gala dinner with themed food stations and premium open bar.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('garden-party.jpg'); ?>" alt="Garden party Stanley">
            <span class="blog-card-tag" data-i18n="blog.post3.tag">Private</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post3.date">June 2026</p>
            <h3 data-i18n="blog.post3.title">Garden Party in Stanley</h3>
            <p data-i18n="blog.post3.desc">An intimate 60-guest afternoon celebration with Mediterranean tapas.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('product-launch.jpg'); ?>" alt="Product launch cocktail">
            <span class="blog-card-tag" data-i18n="blog.post4.tag">Corporate</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post4.date">May 2026</p>
            <h3 data-i18n="blog.post4.title">Luxury Brand Product Launch</h3>
            <p data-i18n="blog.post4.desc">Cocktail reception for 200 VIP guests in Central.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('private-events.jpg'); ?>" alt="Annual awards dinner">
            <span class="blog-card-tag" data-i18n="blog.post5.tag">Corporate</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post5.date">January 2026</p>
            <h3 data-i18n="blog.post5.title">Chinese New Year Corporate Dinner</h3>
            <p data-i18n="blog.post5.desc">Traditional poon choi banquet for 300 guests with auspicious dishes.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-image">
            <img src="<?php echo lumina_img('charity-gala.jpg'); ?>" alt="Charity gala Peninsula">
            <span class="blog-card-tag" data-i18n="blog.post6.tag">Charity</span>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date" data-i18n="blog.post6.date">November 2025</p>
            <h3 data-i18n="blog.post6.title">Charity Gala at The Peninsula</h3>
            <p data-i18n="blog.post6.desc">Black-tie fundraising dinner with five-course French-Cantonese fusion menu.</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="blog-read-more" data-i18n="blog.readmore">Read Case Study</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Food highlight -->
  <section class="section" style="background: var(--color-surface); padding-top: 0;">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="gallery.eyebrow">Portfolio</p>
        <h2 data-i18n="gallery.title">Moments We've Created</h2>
      </div>
      <div class="food-showcase reveal">
        <div class="food-showcase-item"><img src="<?php echo lumina_img('gourmet-canapes.jpg'); ?>" alt="Dim sum"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('dessert-table.jpg'); ?>" alt="Seafood"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('buffet-station.jpg'); ?>" alt="Desserts"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('cocktail-reception.jpg'); ?>" alt="Banquet"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('full-service.jpg'); ?>" alt="Buffet"></div>
      </div>
    </div>
  </section>

  <section class="section contact-section" style="padding: 4rem 0;">
    <div class="container" style="text-align:center;">
      <h2 data-i18n="contact.title">Let's Plan Something Extraordinary</h2>
      <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-accent" style="margin-top:1.5rem;" data-i18n="nav.cta">Get a Quote</a>
    </div>
  </section>
<?php get_footer(); ?>
