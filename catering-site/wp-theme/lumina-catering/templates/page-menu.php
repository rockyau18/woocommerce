<?php
/* Template Name: Menu */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-hero">
    <div class="page-hero-bg">
      <?php lumina_image('buffet-station.jpg', 'Gourmet catering menu Hong Kong', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="container page-hero-content">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Home</a> / <span data-i18n="menu.breadcrumb">Our Menu</span></p>
      <p class="eyebrow" data-i18n="menu.eyebrow">Culinary Showcase</p>
      <h1 data-i18n="menu.title">A Feast for the Eyes & Palate</h1>
      <p class="lead" style="color: rgba(255,255,255,0.8);" data-i18n="menu.lead">From traditional Cantonese delicacies to contemporary Western cuisine — explore our signature dishes.</p>
    </div>
  </section>

  <!-- Food Showcase -->
  <section class="section" style="padding-bottom: 2rem;">
    <div class="container">
      <div class="food-showcase reveal">
        <div class="food-showcase-item"><?php lumina_image('gourmet-canapes.jpg', 'Wedding banquet dishes', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="food-showcase-item"><?php lumina_image('dessert-table.jpg', 'Fresh seafood platter', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="food-showcase-item"><?php lumina_image('wedding-catering.jpg', 'Dessert selection', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="food-showcase-item"><?php lumina_image('cocktail-reception.jpg', 'Cocktail canapés', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
        <div class="food-showcase-item"><?php lumina_image('full-service.jpg', 'Corporate buffet', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
      </div>
    </div>
  </section>

  <!-- Menu Items -->
  <section class="section" style="padding-top: 2rem;">
    <div class="container">
      <div class="menu-tabs reveal">
        <button class="menu-tab active" data-category="all" data-i18n="menu.tab.all">All</button>
        <button class="menu-tab" data-category="canapes" data-i18n="menu.tab.canapes">Canapés & Starters</button>
        <button class="menu-tab" data-category="chinese" data-i18n="menu.tab.chinese">Chinese Banquet</button>
        <button class="menu-tab" data-category="western" data-i18n="menu.tab.western">Western Mains</button>
        <button class="menu-tab" data-category="desserts" data-i18n="menu.tab.desserts">Desserts</button>
        <button class="menu-tab" data-category="beverages" data-i18n="menu.tab.beverages">Beverages</button>
      </div>

      <div class="menu-category active" data-category="all">
        <div class="menu-grid">
          <article class="menu-item reveal" data-cat="canapes">
            <div class="menu-item-image"><?php lumina_image('gourmet-canapes.jpg', 'Har Gow and Siu Mai', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item1.tag">Signature</span>
              <h3 data-i18n="menu.item1.title">Har Gow & Siu Mai Trio</h3>
              <p data-i18n="menu.item1.desc">Hand-crafted crystal shrimp dumplings and pork siu mai.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="canapes">
            <div class="menu-item-image"><?php lumina_image('cocktail-reception.jpg', 'Char siu bao sliders', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item2.tag">Fusion</span>
              <h3 data-i18n="menu.item2.title">Mini Char Siu Bao Sliders</h3>
              <p data-i18n="menu.item2.desc">Fluffy bao buns filled with honey-glazed char siu.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="canapes">
            <div class="menu-item-image"><?php lumina_image('buffet-station.jpg', 'Smoked salmon blinis', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item3.tag">Western</span>
              <h3 data-i18n="menu.item3.title">Smoked Salmon Blinis</h3>
              <p data-i18n="menu.item3.desc">Scottish smoked salmon on buckwheat blinis.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="chinese">
            <div class="menu-item-image"><?php lumina_image('rooftop-wedding.jpg', 'Braised abalone', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item4.tag">Banquet</span>
              <h3 data-i18n="menu.item4.title">Braised Abalone & Sea Cucumber</h3>
              <p data-i18n="menu.item4.desc">Premium South African abalone slow-braised in oyster sauce.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="chinese">
            <div class="menu-item-image"><?php lumina_image('corporate-gala.jpg', 'Roast suckling pig', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item5.tag">Banquet</span>
              <h3 data-i18n="menu.item5.title">Crispy Roast Suckling Pig</h3>
              <p data-i18n="menu.item5.desc">Whole roasted suckling pig with crackling skin.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="chinese">
            <div class="menu-item-image"><?php lumina_image('garden-party.jpg', 'Lobster noodles', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item6.tag">Banquet</span>
              <h3 data-i18n="menu.item6.title">Lobster Noodles in Superior Broth</h3>
              <p data-i18n="menu.item6.desc">Fresh Boston lobster wok-fried with egg noodles.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="western">
            <div class="menu-item-image"><?php lumina_image('full-service.jpg', 'Wagyu beef', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item7.tag">Western</span>
              <h3 data-i18n="menu.item7.title">Wagyu Beef Tenderloin</h3>
              <p data-i18n="menu.item7.desc">Australian M9+ wagyu with truffle mash and red wine jus.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="western">
            <div class="menu-item-image"><?php lumina_image('wedding-catering.jpg', 'Sea bass', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item8.tag">Western</span>
              <h3 data-i18n="menu.item8.title">Pan-Seared Sea Bass</h3>
              <p data-i18n="menu.item8.desc">Mediterranean sea bass with lemon beurre blanc.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="desserts">
            <div class="menu-item-image"><?php lumina_image('dessert-table.jpg', 'Mango pomelo sago', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item9.tag">Dessert</span>
              <h3 data-i18n="menu.item9.title">Mango Pomelo Sago</h3>
              <p data-i18n="menu.item9.desc">Classic Hong Kong dessert with fresh mango and pomelo.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="desserts">
            <div class="menu-item-image"><?php lumina_image('charity-gala.jpg', 'Egg tarts', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item10.tag">Dessert</span>
              <h3 data-i18n="menu.item10.title">Egg Tart & Petit Fours</h3>
              <p data-i18n="menu.item10.desc">Flaky Portuguese-style egg tarts and French macarons.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="desserts">
            <div class="menu-item-image"><?php lumina_image('product-launch.jpg', 'Fruit platter', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item11.tag">Dessert</span>
              <h3 data-i18n="menu.item11.title">Seasonal Fruit Platter</h3>
              <p data-i18n="menu.item11.desc">Artfully arranged tropical and imported fruits.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="beverages">
            <div class="menu-item-image"><?php lumina_image('bar-service.jpg', 'Gin and tonic bar', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item12.tag">Beverage</span>
              <h3 data-i18n="menu.item12.title">Signature Gin & Tonic Bar</h3>
              <p data-i18n="menu.item12.desc">Curated selection of premium gins with botanical garnishes.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="beverages">
            <div class="menu-item-image"><?php lumina_image('hero-bar.jpg', 'Champagne selection', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item13.tag">Beverage</span>
              <h3 data-i18n="menu.item13.title">Champagne & Sparkling Selection</h3>
              <p data-i18n="menu.item13.desc">Moët, Veuve Clicquot, and local sparkling wines.</p>
            </div>
          </article>
          <article class="menu-item reveal" data-cat="beverages">
            <div class="menu-item-image"><?php lumina_image('private-events.jpg', 'Mocktail programme', ['sizes' => '(max-width: 768px) 100vw, 50vw']); ?></div>
            <div class="menu-item-body">
              <span class="menu-item-tag" data-i18n="menu.item14.tag">Beverage</span>
              <h3 data-i18n="menu.item14.title">Craft Mocktail Programme</h3>
              <p data-i18n="menu.item14.desc">Zero-proof cocktails with fresh herbs and seasonal fruits.</p>
            </div>
          </article>
        </div>
      </div>

      <p class="lead reveal" style="text-align:center; margin-top:3rem; max-width:60ch; margin-inline:auto;" data-i18n="menu.note">All menus are fully customisable. Dietary requirements available upon request.</p>
    </div>
  </section>

  <section class="section contact-section" style="padding: 4rem 0;">
    <div class="container" style="text-align:center;">
      <h2 data-i18n="menu.cta">Request Custom Menu</h2>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent" style="margin-top:1.5rem;" data-i18n="nav.cta">Get a Quote</a>
    </div>
  </section>

<?php get_footer(); ?>
