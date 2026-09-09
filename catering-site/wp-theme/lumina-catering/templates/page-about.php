<?php
/* Template Name: About */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
    <div class="page-hero-bg">
      <img src="<?php echo lumina_img('full-service.jpg'); ?>" alt="Lumina Catering event team Hong Kong">
    </div>
    <div class="container page-hero-content">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="aboutpage.breadcrumb">About Us</span></p>
      <p class="eyebrow" data-i18n="aboutpage.eyebrow">Our Story</p>
      <h1 data-i18n="aboutpage.title">Passion for Food, Devotion to Service</h1>
      <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="aboutpage.lead">Founded in Hong Kong over 15 years ago, Lumina Catering was born from a simple belief.</p>
    </div>
  </section>

  <!-- Story -->
  <section class="section">
    <div class="container">
      <div class="content-block reveal">
        <div>
          <h2 data-i18n="aboutpage.story.title">Rooted in Hong Kong, Inspired by the World</h2>
          <p class="lead" style="margin-top:1rem;" data-i18n="aboutpage.story.p1">What started as a small team of passionate chefs serving intimate dinner parties in Mid-Levels has grown into one of Hong Kong's most trusted catering companies.</p>
          <p style="margin-top:1rem; color: var(--color-text-muted);" data-i18n="aboutpage.story.p2">We blend the rich culinary heritage of Cantonese cuisine with international techniques and presentation.</p>
        </div>
        <div class="content-block-image">
          <img src="<?php echo lumina_img('corporate-gala.jpg'); ?>" alt="Hong Kong catering food and harbour view">
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="section" style="background: var(--color-surface);">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="aboutpage.team.eyebrow">Meet the Team</p>
        <h2 data-i18n="aboutpage.team.title">The People Behind Every Plate</h2>
        <p class="lead" data-i18n="aboutpage.team.lead">Our diverse team brings decades of combined experience to every event.</p>
      </div>
      <div class="team-grid">
        <div class="team-card reveal">
          <div class="team-card-image"><img src="<?php echo lumina_img('team-chef.jpg'); ?>" alt="Chef Marcus Lee"></div>
          <div class="team-card-body">
            <h3 data-i18n="aboutpage.team1.name">Chef Marcus Lee</h3>
            <p class="team-role" data-i18n="aboutpage.team1.role">Executive Chef</p>
            <p data-i18n="aboutpage.team1.desc">20 years in Michelin-starred kitchens across Hong Kong and London.</p>
          </div>
        </div>
        <div class="team-card reveal">
          <div class="team-card-image"><img src="<?php echo lumina_img('team-events.jpg'); ?>" alt="Grace Ho"></div>
          <div class="team-card-body">
            <h3 data-i18n="aboutpage.team2.name">Grace Ho</h3>
            <p class="team-role" data-i18n="aboutpage.team2.role">Event Director</p>
            <p data-i18n="aboutpage.team2.desc">Former luxury hotel events manager. Ensures every detail exceeds expectations.</p>
          </div>
        </div>
        <div class="team-card reveal">
          <div class="team-card-image"><img src="<?php echo lumina_img('team-sommelier.jpg'); ?>" alt="Daniel Chan"></div>
          <div class="team-card-body">
            <h3 data-i18n="aboutpage.team3.name">Daniel Chan</h3>
            <p class="team-role" data-i18n="aboutpage.team3.role">Head Sommelier</p>
            <p data-i18n="aboutpage.team3.desc">Certified sommelier with expertise in wine and cocktail pairings.</p>
          </div>
        </div>
        <div class="team-card reveal">
          <div class="team-card-image"><img src="<?php echo lumina_img('team-ops.jpg'); ?>" alt="Amy Wong"></div>
          <div class="team-card-body">
            <h3 data-i18n="aboutpage.team4.name">Amy Wong</h3>
            <p class="team-role" data-i18n="aboutpage.team4.role">Operations Manager</p>
            <p data-i18n="aboutpage.team4.desc">Logistics expert coordinating teams across all Hong Kong districts.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values -->
  <section class="section why-section">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="aboutpage.values.eyebrow">Our Values</p>
        <h2 data-i18n="aboutpage.values.title">What Drives Us</h2>
      </div>
      <div class="values-grid">
        <div class="value-card reveal">
          <div class="why-number">01</div>
          <h3 data-i18n="aboutpage.value1.title">Quality First</h3>
          <p data-i18n="aboutpage.value1.desc">We source the freshest ingredients from trusted local markets.</p>
        </div>
        <div class="value-card reveal">
          <div class="why-number">02</div>
          <h3 data-i18n="aboutpage.value2.title">Personal Touch</h3>
          <p data-i18n="aboutpage.value2.desc">Every event receives a dedicated coordinator.</p>
        </div>
        <div class="value-card reveal">
          <div class="why-number">03</div>
          <h3 data-i18n="aboutpage.value3.title">Sustainability</h3>
          <p data-i18n="aboutpage.value3.desc">Committed to reducing food waste and eco-friendly practices.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Food Gallery -->
  <section class="section">
    <div class="container">
      <div class="food-showcase reveal">
        <div class="food-showcase-item"><img src="<?php echo lumina_img('gourmet-canapes.jpg'); ?>" alt="Dim sum canapés"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('rooftop-wedding.jpg'); ?>" alt="Wedding banquet"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('dessert-table.jpg'); ?>" alt="Seafood"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('cocktail-reception.jpg'); ?>" alt="Desserts"></div>
        <div class="food-showcase-item"><img src="<?php echo lumina_img('buffet-station.jpg'); ?>" alt="Buffet"></div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
