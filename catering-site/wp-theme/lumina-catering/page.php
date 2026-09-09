<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
  <div class="page-hero-bg">
    <img src="<?php echo lumina_img('full-service.jpg'); ?>" alt="">
  </div>
  <div class="container page-hero-content">
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section class="section">
  <div class="container" style="max-width: 720px;">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
  </div>
</section>
<?php get_footer(); ?>
