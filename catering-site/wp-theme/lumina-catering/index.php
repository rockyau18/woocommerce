<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <img src="<?php echo lumina_img('hero-bar.jpg'); ?>" alt="">
  </div>
  <div class="container page-hero-content">
    <h1><?php bloginfo('name'); ?></h1>
    <p class="lead" style="color: rgba(255,255,255,0.8);"><?php bloginfo('description'); ?></p>
  </div>
</section>
<?php get_footer(); ?>
