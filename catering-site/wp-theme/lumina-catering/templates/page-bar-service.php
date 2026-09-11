<?php
/* Template Name: Bar Service */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-bg">
      <?php lumina_image('cocktail-reception.jpg', 'Bar service catering Hong Kong', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="container page-hero-content">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="bar.breadcrumb">Bar Service</span></p>
      <p class="eyebrow" data-i18n="bar.eyebrow">Bar & Beverage</p>
      <h1 data-i18n="bar.title">Time to Raise the Bar</h1>
      <p class="lead" style="color: rgba(255,255,255,0.8); max-width: 60ch;" data-i18n="bar.lead">Fully licensed and insured to serve premium cocktails, wines, and craft beverages at your event. Our mixologists create inventive concoctions that generate buzz in every sense of the word.</p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" style="margin-top: 2rem;" data-i18n="bar.cta">Start Planning</a>
    </div>
  </section>

  <!-- Content Block 1 -->
  <section class="section">
    <div class="container">
      <div class="content-block reveal">
        <div>
          <p class="eyebrow" data-i18n="bar.block1.eyebrow">Licensed & Insured</p>
          <h2 data-i18n="bar.block1.title">Sophisticated Mixology, Unforgettable Experiences</h2>
          <p class="lead" data-i18n="bar.block1.lead">Our deep knowledge of spirits and mixology allows us to craft signature cocktails that become the talk of your event. From classic Old Fashioneds to bespoke creations inspired by your theme.</p>
          <ul style="margin-top: 1.5rem; display: grid; gap: 0.75rem;">
            <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="bar.block1.li1">Signature cocktail menu design</span></li>
            <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="bar.block1.li2">Premium spirits, wines & craft beers</span></li>
            <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="bar.block1.li3">Non-alcoholic mocktail programmes</span></li>
            <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="bar.block1.li4">Champagne towers & wine service</span></li>
          </ul>
        </div>
        <div class="content-block-image">
          <?php lumina_image('bar-service.jpg', 'Mixologist crafting cocktails', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
        </div>
      </div>

      <div class="content-block reverse reveal">
        <div>
          <p class="eyebrow" data-i18n="bar.block2.eyebrow">Full Setup</p>
          <h2 data-i18n="bar.block2.title">Shake, Stir & Pour — We've Got Everything</h2>
          <p class="lead" data-i18n="bar.block2.lead">We arrive fully equipped with everything needed to entertain your guests. Whether it's a cash bar, limited bar, or open bar — relax and enjoy the evening knowing our team is serving with a smile.</p>
        </div>
        <div class="content-block-image">
          <?php lumina_image('full-service.jpg', 'Full bar setup at event', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Inclusions -->
  <section class="section" style="background: var(--color-surface);">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="bar.incl.eyebrow">What's Included</p>
        <h2 data-i18n="bar.incl.title">Everything You Need, Nothing You Don't</h2>
      </div>
      <div class="inclusions-grid">
        <div class="inclusion-card reveal">
          <div class="feature-icon">🍸</div>
          <h3 data-i18n="bar.incl.1.title">Bar Rentals</h3>
          <p data-i18n="bar.incl.1.desc">Premium portable bars, back bars, and ice wells styled to match your event aesthetic.</p>
        </div>
        <div class="inclusion-card reveal">
          <div class="feature-icon">👨‍🍳</div>
          <h3 data-i18n="bar.incl.2.title">Expert Bartenders</h3>
          <p data-i18n="bar.incl.2.desc">Trained, certified mixologists and bar staff with years of event experience.</p>
        </div>
        <div class="inclusion-card reveal">
          <div class="feature-icon">🥃</div>
          <h3 data-i18n="bar.incl.3.title">Glassware & Supplies</h3>
          <p data-i18n="bar.incl.3.desc">Crystal glassware, napkins, straws, garnishes, ice, and all bar essentials.</p>
        </div>
        <div class="inclusion-card reveal">
          <div class="feature-icon">📋</div>
          <h3 data-i18n="bar.incl.4.title">Menu Design</h3>
          <p data-i18n="bar.incl.4.desc">Custom printed or digital drink menus featuring your event branding.</p>
        </div>
        <div class="inclusion-card reveal">
          <div class="feature-icon">🛡</div>
          <h3 data-i18n="bar.incl.5.title">Licence & Insurance</h3>
          <p data-i18n="bar.incl.5.desc">Full liquor licence and public liability coverage for complete peace of mind.</p>
        </div>
        <div class="inclusion-card reveal">
          <div class="feature-icon">🧹</div>
          <h3 data-i18n="bar.incl.6.title">Setup & Breakdown</h3>
          <p data-i18n="bar.incl.6.desc">Our team handles all setup before and cleanup after your event.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bar Types -->
  <section class="section">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="bar.types.eyebrow">Bar Options</p>
        <h2 data-i18n="bar.types.title">Flexible Bar Packages</h2>
      </div>
      <div class="why-grid" style="grid-template-columns: repeat(3, 1fr);">
        <div class="why-card reveal" style="background: var(--color-surface); color: var(--color-text); border-color: var(--color-border);">
          <div class="why-number">01</div>
          <h3 data-i18n="bar.types.1.title">Open Bar</h3>
          <p data-i18n="bar.types.1.desc">Unlimited drinks for your guests — the ultimate hospitality experience for weddings and galas.</p>
        </div>
        <div class="why-card reveal" style="background: var(--color-surface); color: var(--color-text); border-color: var(--color-border);">
          <div class="why-number">02</div>
          <h3 data-i18n="bar.types.2.title">Limited Bar</h3>
          <p data-i18n="bar.types.2.desc">A curated selection of beer, wine, and signature cocktails — great value with style.</p>
        </div>
        <div class="why-card reveal" style="background: var(--color-surface); color: var(--color-text); border-color: var(--color-border);">
          <div class="why-number">03</div>
          <h3 data-i18n="bar.types.3.title">Cash / Token Bar</h3>
          <p data-i18n="bar.types.3.desc">Guests purchase drinks individually — ideal for larger events with flexible budgets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section contact-section">
    <div class="container" style="text-align: center;">
      <div class="reveal">
        <p class="eyebrow" style="color: var(--color-accent-light);" data-i18n="bar.cta2.eyebrow">Ready to Start?</p>
        <h2 data-i18n="bar.cta2.title">Let's Create an Unforgettable Bar Experience</h2>
        <p class="lead" style="color: rgba(255,255,255,0.75); margin: 1rem auto 2rem;" data-i18n="bar.cta2.lead">Tell us about your event and we'll craft a bespoke bar package within 24 hours.</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" data-i18n="bar.cta">Start Planning</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
