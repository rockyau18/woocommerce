<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section id="contact" class="section contact-section">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal">
        <p class="eyebrow" style="color: var(--color-accent-light);" data-i18n="contact.eyebrow">Get in Touch</p>
        <h2 data-i18n="contact.title">Let's Plan Something Extraordinary</h2>
        <p class="lead" data-i18n="contact.lead">Tell us about your event and our team will respond within 24 hours with a tailored proposal.</p>
        <div class="contact-details">
          <div class="contact-detail">
            <strong data-i18n="contact.phone">Phone</strong>
            <a href="tel:+85221234567">+852 2123 4567</a>
          </div>
          <div class="contact-detail">
            <strong data-i18n="contact.email">Email</strong>
            <a href="mailto:hello@luminacatering.hk">hello@luminacatering.hk</a>
          </div>
          <div class="contact-detail">
            <strong data-i18n="contact.address">Address</strong>
            <span data-i18n="contact.address.val">Unit 1208, 12/F, K11 Atelier, Victoria Dockside, Tsim Sha Tsui, Kowloon</span>
          </div>
          <div class="contact-detail">
            <strong data-i18n="contact.hours">Office Hours</strong>
            <span data-i18n="contact.hours.val">Mon – Sat, 9:00 AM – 7:00 PM</span>
          </div>
        </div>
        <a href="https://wa.me/85291234567" class="whatsapp-btn" target="_blank" rel="noopener">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <span data-i18n="contact.whatsapp">Chat on WhatsApp</span>
        </a>
      </div>
      <form class="inquiry-form reveal" id="lumina-inquiry-form">
        <div class="form-row">
          <div class="form-group">
            <label data-i18n="form.name">Full Name</label>
            <input type="text" name="name" required data-i18n-placeholder="form.name">
          </div>
          <div class="form-group">
            <label data-i18n="form.email">Email Address</label>
            <input type="email" name="email" required data-i18n-placeholder="form.email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label data-i18n="form.phone">Phone Number</label>
            <input type="tel" name="phone" data-i18n-placeholder="form.phone">
          </div>
          <div class="form-group">
            <label data-i18n="form.event">Event Type</label>
            <select name="event_type">
              <option data-i18n="form.event.corporate">Corporate Event</option>
              <option data-i18n="form.event.wedding">Wedding</option>
              <option data-i18n="form.event.private">Private Celebration</option>
              <option data-i18n="form.event.bar">Bar Service Only</option>
              <option data-i18n="form.event.other">Other</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label data-i18n="form.guests">Guest Count</label>
            <input type="number" name="guests" min="1" placeholder="50">
          </div>
          <div class="form-group">
            <label data-i18n="form.date">Preferred Date</label>
            <input type="date" name="event_date">
          </div>
        </div>
        <div class="form-group">
          <label data-i18n="form.message">Tell us about your event</label>
          <textarea name="message" data-i18n-placeholder="form.message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary form-submit" data-i18n="form.submit">Send Inquiry</button>
        <div class="form-notice" hidden></div>
      </form>
    </div>
  </div>
</section>
