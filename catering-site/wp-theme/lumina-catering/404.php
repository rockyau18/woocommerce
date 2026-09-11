<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image('rooftop-wedding.jpg', '', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <h1><?php esc_html_e('Page not found', 'lumina-catering'); ?></h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);">The page you requested is not available.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-accent" style="margin-top:1.5rem;">Back to Home</a>
  </div>
</section>
<?php get_footer(); ?>
