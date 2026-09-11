<?php
/* Template Name: Service Detail */
if (!defined('ABSPATH')) {
    exit;
}
$svc = lumina_current_service();
if (!$svc) {
    get_header();
    echo '<section class="section"><div class="container"><p>Service not found.</p></div></section>';
    get_footer();
    return;
}
$k = $svc['key'];
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image($svc['hero'], '', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <a href="<?php echo esc_url(home_url('/services/')); ?>" data-i18n="nav.services">Services</a> / <span data-i18n="<?php echo esc_attr($k); ?>.breadcrumb"><?php echo esc_html($svc['breadcrumb']); ?></span></p>
    <p class="eyebrow" data-i18n="<?php echo esc_attr($k); ?>.eyebrow"><?php echo esc_html($svc['eyebrow']); ?></p>
    <h1 data-i18n="<?php echo esc_attr($k); ?>.title"><?php echo esc_html($svc['title']); ?></h1>
    <p class="lead" style="color: rgba(255,255,255,0.8); max-width: 60ch;" data-i18n="<?php echo esc_attr($k); ?>.lead"><?php echo esc_html($svc['lead']); ?></p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" style="margin-top: 2rem;" data-i18n="nav.cta">Get a Quote</a>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="content-block reveal">
      <div>
        <p class="eyebrow" data-i18n="<?php echo esc_attr($k); ?>.b1.eyebrow"></p>
        <h2 data-i18n="<?php echo esc_attr($k); ?>.b1.title"></h2>
        <p class="lead" data-i18n="<?php echo esc_attr($k); ?>.b1.lead"></p>
        <ul style="margin-top: 1.5rem; display: grid; gap: 0.75rem;">
          <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="<?php echo esc_attr($k); ?>.b1.li1"></span></li>
          <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="<?php echo esc_attr($k); ?>.b1.li2"></span></li>
          <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="<?php echo esc_attr($k); ?>.b1.li3"></span></li>
          <li style="display:flex; gap:0.75rem; align-items:center;"><span style="color:var(--color-accent);">✦</span> <span data-i18n="<?php echo esc_attr($k); ?>.b1.li4"></span></li>
        </ul>
      </div>
      <div class="content-block-image">
        <?php lumina_image($svc['img1'], '', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
      </div>
    </div>
    <div class="content-block reverse reveal">
      <div>
        <p class="eyebrow" data-i18n="<?php echo esc_attr($k); ?>.b2.eyebrow"></p>
        <h2 data-i18n="<?php echo esc_attr($k); ?>.b2.title"></h2>
        <p class="lead" data-i18n="<?php echo esc_attr($k); ?>.b2.lead"></p>
      </div>
      <div class="content-block-image">
        <?php lumina_image($svc['img2'], '', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background: var(--color-surface);">
  <div class="container">
    <div class="section-header center reveal">
      <p class="eyebrow" data-i18n="<?php echo esc_attr($k); ?>.incl.eyebrow"></p>
      <h2 data-i18n="<?php echo esc_attr($k); ?>.incl.title"></h2>
    </div>
    <div class="inclusions-grid">
      <?php for ($i = 1; $i <= 6; $i++) : ?>
      <div class="inclusion-card reveal">
        <div class="why-number">0<?php echo $i; ?></div>
        <h3 data-i18n="<?php echo esc_attr($k); ?>.incl.<?php echo $i; ?>.title"></h3>
        <p data-i18n="<?php echo esc_attr($k); ?>.incl.<?php echo $i; ?>.desc"></p>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section contact-section">
  <div class="container" style="text-align: center;">
    <div class="reveal">
      <p class="eyebrow" style="color: var(--color-accent-light);" data-i18n="<?php echo esc_attr($k); ?>.cta.eyebrow"></p>
      <h2 data-i18n="<?php echo esc_attr($k); ?>.cta.title"></h2>
      <p class="lead" style="color: rgba(255,255,255,0.75); margin: 1rem auto 2rem;" data-i18n="<?php echo esc_attr($k); ?>.cta.lead"></p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" data-i18n="nav.cta">Get a Quote</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>
