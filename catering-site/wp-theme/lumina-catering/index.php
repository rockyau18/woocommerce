<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <?php lumina_image('hero-bar.jpg', '', ['eager' => true, 'sizes' => '100vw']); ?>
  </div>
  <div class="container page-hero-content">
    <h1><?php bloginfo('name'); ?></h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);"><?php bloginfo('description'); ?></p>
  </div>
</section>
<?php get_footer(); ?>
