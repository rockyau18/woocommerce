<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">Lumina <span>Catering</span></a>
          <p data-i18n="footer.desc">Premium catering and bar services for discerning hosts across Hong Kong.</p>
        </div>
        <div class="footer-col">
          <h4 data-i18n="footer.services">Services</h4>
          <a href="<?php echo esc_url(home_url('/corporate-events/')); ?>" data-i18n="services.corporate.title">Corporate Events</a>
          <a href="<?php echo esc_url(home_url('/weddings/')); ?>" data-i18n="services.wedding.title">Weddings</a>
          <a href="<?php echo esc_url(home_url('/private-celebrations/')); ?>" data-i18n="services.private.title">Private Celebrations</a>
          <a href="<?php echo esc_url(home_url('/bar-service/')); ?>" data-i18n="services.bar.title">Bar & Beverage</a>
          <a href="<?php echo esc_url(home_url('/full-service/')); ?>" data-i18n="services.full.title">Full-Service Catering</a>
          <a href="<?php echo esc_url(home_url('/menu/')); ?>" data-i18n="footer.menu">Our Menu</a>
        </div>
        <div class="footer-col">
          <h4 data-i18n="footer.company">Company</h4>
          <a href="<?php echo esc_url(home_url('/about/')); ?>" data-i18n="footer.about">About Us</a>
          <a href="<?php echo esc_url(home_url('/gallery/')); ?>" data-i18n="nav.gallery">Gallery</a>
          <a href="<?php echo esc_url(home_url('/blog/')); ?>" data-i18n="footer.blog">Blog & Cases</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" data-i18n="nav.contact">Contact</a>
        </div>
        <div class="footer-col">
          <h4 data-i18n="footer.legal">Legal</h4>
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" data-i18n="footer.privacy">Privacy Policy</a>
          <a href="<?php echo esc_url(home_url('/terms/')); ?>" data-i18n="footer.terms">Terms of Service</a>
        </div>
      </div>
      <div class="footer-bottom">
        <span data-i18n="footer.copyright">© 2026 Lumina Catering HK. All rights reserved.</span>
        <div class="social-links">
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Facebook">FB</a>
          <a href="#" aria-label="LinkedIn">IN</a>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
