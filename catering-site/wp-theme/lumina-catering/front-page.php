<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<!-- Hero -->
  <section id="home" class="hero">
    <div class="hero-bg">
      <?php lumina_image('hero-bar.jpg', 'Premium bar and catering service in Hong Kong', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="hero-content">
      <p class="eyebrow" data-i18n="hero.eyebrow">Premium Catering · Hong Kong</p>
      <h1 data-i18n="hero.title">Exceptional Events, Unforgettable Flavours</h1>
      <p class="lead" data-i18n="hero.lead">From intimate gatherings to grand galas, we craft bespoke culinary experiences across Hong Kong with world-class service and attention to every detail.</p>
      <div class="hero-cta">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" data-i18n="hero.cta1">Plan Your Event</a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-outline" data-i18n="hero.cta2">Explore Services</a>
      </div>
      <div class="hero-stats">
        <div class="stat">
          <strong data-i18n="hero.stat1.num">500+</strong>
          <span data-i18n="hero.stat1.label">Events Catered</span>
        </div>
        <div class="stat">
          <strong data-i18n="hero.stat2.num">15+</strong>
          <span data-i18n="hero.stat2.label">Years Experience</span>
        </div>
        <div class="stat">
          <strong data-i18n="hero.stat3.num">98%</strong>
          <span data-i18n="hero.stat3.label">Client Satisfaction</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Bar -->
  <div class="trust-bar">
    <div class="container trust-bar-inner">
      <span>✦ <strong data-i18n="trust.licensed">Fully Licensed</strong></span>
      <span>✦ <strong data-i18n="trust.insured">Insured & Certified</strong></span>
      <span>✦ <strong data-i18n="trust.halal">Halal Options</strong></span>
      <span>✦ <strong data-i18n="trust.sustainable">Sustainable Sourcing</strong></span>
    </div>
  </div>

  <!-- About -->
  <section id="about" class="section">
    <div class="container">
      <div class="about-grid reveal">
        <div class="about-image">
          <?php lumina_image('gourmet-canapes.jpg', 'Gourmet catering at Hong Kong event', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
        </div>
        <div>
          <div class="section-header">
            <p class="eyebrow" data-i18n="about.eyebrow">Who We Are</p>
            <h2 data-i18n="about.title">Hong Kong's Premier Catering Partner</h2>
            <p class="lead" data-i18n="about.lead">Based in the heart of Hong Kong, Lumina Catering brings together culinary artistry and flawless execution for events that leave lasting impressions.</p>
          </div>
          <div class="about-features">
            <div class="about-feature">
              <div class="feature-icon">🍽</div>
              <div>
                <h3 data-i18n="about.f1.title">Bespoke Menus</h3>
                <p data-i18n="about.f1.desc">Every menu is tailored to your vision, dietary needs, and cultural preferences.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="feature-icon">✨</div>
              <div>
                <h3 data-i18n="about.f2.title">End-to-End Service</h3>
                <p data-i18n="about.f2.desc">From concept to cleanup — we handle every detail so you can enjoy your event.</p>
              </div>
            </div>
            <div class="about-feature">
              <div class="feature-icon">🍸</div>
              <div>
                <h3 data-i18n="about.f3.title">Licensed Bar Service</h3>
                <p data-i18n="about.f3.desc">Fully licensed to serve premium cocktails, wines, and craft beverages at your venue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="section" style="background: var(--color-surface);">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="services.eyebrow">Our Services</p>
        <h2 data-i18n="services.title">Crafted for Every Occasion</h2>
        <p class="lead" data-i18n="services.lead">Whether it's a corporate gala, dream wedding, or private celebration — we bring the same passion and precision to every event.</p>
      </div>
      <div class="services-grid">
        <article class="service-card featured reveal">
          <div class="service-card-image">
            <?php lumina_image('corporate-gala.jpg', 'Corporate event catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
          </div>
          <div class="service-card-body">
            <h3 data-i18n="services.corporate.title">Corporate Events</h3>
            <p data-i18n="services.corporate.desc">Impress clients and colleagues with refined dining at conferences, product launches, and annual dinners.</p>
            <a href="<?php echo esc_url(home_url('/corporate-events/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
          </div>
        </article>
        <article class="service-card reveal">
          <div class="service-card-image">
            <?php lumina_image('wedding-catering.jpg', 'Wedding catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
          </div>
          <div class="service-card-body">
            <h3 data-i18n="services.wedding.title">Weddings</h3>
            <p data-i18n="services.wedding.desc">From cocktail receptions to multi-course banquets — make your special day truly extraordinary.</p>
            <a href="<?php echo esc_url(home_url('/weddings/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
          </div>
        </article>
        <article class="service-card reveal">
          <div class="service-card-image">
            <?php lumina_image('garden-party.jpg', 'Private celebration catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
          </div>
          <div class="service-card-body">
            <h3 data-i18n="services.private.title">Private Celebrations</h3>
            <p data-i18n="services.private.desc">Birthdays, anniversaries, and garden parties styled with elegance and warmth.</p>
            <a href="<?php echo esc_url(home_url('/private-celebrations/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
          </div>
        </article>
        <article class="service-card reveal">
          <div class="service-card-image">
            <?php lumina_image('bar-service.jpg', 'Bar and beverage service', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
          </div>
          <div class="service-card-body">
            <h3 data-i18n="services.bar.title">Bar & Beverage</h3>
            <p data-i18n="services.bar.desc">Professional bartenders, signature cocktails, and full bar setups — licensed and insured.</p>
            <a href="<?php echo esc_url(home_url('/bar-service/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
          </div>
        </article>
        <article class="service-card reveal">
          <div class="service-card-image">
            <?php lumina_image('full-service.jpg', 'Full service catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?>
          </div>
          <div class="service-card-body">
            <h3 data-i18n="services.full.title">Full-Service Catering</h3>
            <p data-i18n="services.full.desc">Complete event catering with chefs, servers, rentals, and on-site coordination.</p>
            <a href="<?php echo esc_url(home_url('/full-service/')); ?>" class="service-link" data-i18n="services.link">Learn More</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Why Us -->
  <section class="section why-section">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="why.eyebrow">Why Lumina</p>
        <h2 data-i18n="why.title">The Difference Is in the Details</h2>
      </div>
      <div class="why-grid">
        <div class="why-card reveal">
          <div class="why-number">01</div>
          <h3 data-i18n="why.1.title">Culinary Excellence</h3>
          <p data-i18n="why.1.desc">Award-winning chefs crafting menus with locally sourced, seasonal ingredients.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-number">02</div>
          <h3 data-i18n="why.2.title">Seamless Planning</h3>
          <p data-i18n="why.2.desc">Dedicated event coordinators guiding you from first call to final toast.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-number">03</div>
          <h3 data-i18n="why.3.title">Premium Presentation</h3>
          <p data-i18n="why.3.desc">Stunning tablescapes, elegant plating, and impeccable service staff.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-number">04</div>
          <h3 data-i18n="why.4.title">Hong Kong Expertise</h3>
          <p data-i18n="why.4.desc">Deep knowledge of local venues, regulations, and cultural traditions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="section">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="process.eyebrow">How It Works</p>
        <h2 data-i18n="process.title">Your Event, Our Process</h2>
      </div>
      <div class="process-steps">
        <div class="process-step reveal">
          <div class="step-num">1</div>
          <h3 data-i18n="process.1.title">Consult</h3>
          <p data-i18n="process.1.desc">Share your vision, guest count, and preferences in a complimentary consultation.</p>
        </div>
        <div class="process-step reveal">
          <div class="step-num">2</div>
          <h3 data-i18n="process.2.title">Design</h3>
          <p data-i18n="process.2.desc">We craft a bespoke menu and service plan tailored to your event.</p>
        </div>
        <div class="process-step reveal">
          <div class="step-num">3</div>
          <h3 data-i18n="process.3.title">Taste</h3>
          <p data-i18n="process.3.desc">Optional tasting session to refine every dish before the big day.</p>
        </div>
        <div class="process-step reveal">
          <div class="step-num">4</div>
          <h3 data-i18n="process.4.title">Celebrate</h3>
          <p data-i18n="process.4.desc">Relax and enjoy — our team delivers a flawless experience.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section id="gallery" class="section" style="background: var(--color-surface);">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="gallery.eyebrow">Portfolio</p>
        <h2 data-i18n="gallery.title">Moments We've Created</h2>
        <p><a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="service-link" data-i18n="services.link">Learn More</a></p>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><?php lumina_image('rooftop-wedding.jpg', 'Rooftop wedding catering', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="gallery-item"><?php lumina_image('cocktail-reception.jpg', 'Cocktail reception', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="gallery-item"><?php lumina_image('dessert-table.jpg', 'Dessert table', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="gallery-item"><?php lumina_image('buffet-station.jpg', 'Buffet station', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="gallery-item"><?php lumina_image('charity-gala.jpg', 'Charity gala dinner', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="testimonials.eyebrow">Testimonials</p>
        <h2 data-i18n="testimonials.title">What Our Clients Say</h2>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote data-i18n="testimonials.1.quote">"Lumina transformed our annual gala into an unforgettable evening. The food was exceptional and the service impeccable."</blockquote>
          <div class="testimonial-author">
            <strong data-i18n="testimonials.1.name">Sarah Chen</strong>
            <span data-i18n="testimonials.1.role">Marketing Director, Central District</span>
          </div>
        </div>
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote data-i18n="testimonials.2.quote">"Our wedding reception was absolutely perfect. Every guest commented on the beautiful presentation and delicious food."</blockquote>
          <div class="testimonial-author">
            <strong data-i18n="testimonials.2.name">Michael & Emily Wong</strong>
            <span data-i18n="testimonials.2.role">Wedding Clients, Repulse Bay</span>
          </div>
        </div>
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote data-i18n="testimonials.3.quote">"Professional, creative, and incredibly responsive. They handled our 300-person corporate lunch flawlessly."</blockquote>
          <div class="testimonial-author">
            <strong data-i18n="testimonials.3.name">James Lau</strong>
            <span data-i18n="testimonials.3.role">Events Manager, Kwun Tong</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" style="background: var(--color-surface);">
    <div class="container">
      <div class="section-header center reveal">
        <p class="eyebrow" data-i18n="faq.eyebrow">FAQ</p>
        <h2 data-i18n="faq.title">Common Questions</h2>
      </div>
      <div class="faq-list reveal">
        <div class="faq-item">
          <button class="faq-question" data-i18n="faq.1.q">What areas in Hong Kong do you serve?</button>
          <div class="faq-answer"><p data-i18n="faq.1.a">We cater events across all districts of Hong Kong Island, Kowloon, and the New Territories, including outlying islands.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" data-i18n="faq.2.q">How far in advance should I book?</button>
          <div class="faq-answer"><p data-i18n="faq.2.a">We recommend booking 4–8 weeks in advance for standard events and 3–6 months for weddings and large corporate functions.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" data-i18n="faq.3.q">Do you accommodate dietary restrictions?</button>
          <div class="faq-answer"><p data-i18n="faq.3.a">Absolutely. We offer vegetarian, vegan, gluten-free, halal, and allergy-conscious menus.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" data-i18n="faq.4.q">Is your bar service fully licensed?</button>
          <div class="faq-answer"><p data-i18n="faq.4.a">Yes. We hold a valid liquor licence and full public liability insurance.</p></div>
        </div>
      </div>
    </div>
  </section>

<?php get_template_part('template-parts/contact-section'); ?>
<?php get_footer(); ?>

