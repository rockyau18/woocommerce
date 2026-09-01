/* Lumina Catering HK — Main JS */

const translations = {
  en: {
    // Nav
    "nav.home": "Home",
    "nav.services": "Services",
    "nav.menu": "Menu",
    "nav.about": "About",
    "nav.blog": "Blog",
    "nav.gallery": "Gallery",
    "nav.contact": "Contact",
    "nav.cta": "Get a Quote",

    // Hero
    "hero.eyebrow": "Premium Catering · Hong Kong",
    "hero.title": "Exceptional Events, Unforgettable Flavours",
    "hero.lead":
      "From rooftop receptions to grand corporate galas — we bring the kitchen, bar, and service team to your venue, creating unforgettable event experiences across Hong Kong.",
    "hero.cta1": "Plan Your Event",
    "hero.cta2": "Explore Services",
    "hero.stat1.num": "500+",
    "hero.stat1.label": "Events Catered",
    "hero.stat2.num": "15+",
    "hero.stat2.label": "Years Experience",
    "hero.stat3.num": "98%",
    "hero.stat3.label": "Client Satisfaction",

    // Trust
    "trust.licensed": "Fully Licensed",
    "trust.insured": "Insured & Certified",
    "trust.halal": "Halal Options",
    "trust.sustainable": "Sustainable Sourcing",

    // About
    "about.eyebrow": "Who We Are",
    "about.title": "Hong Kong's Premier Catering Partner",
    "about.lead":
      "We are a full-service event catering company — not a restaurant. Our chefs, bartenders, and event teams come to your venue with everything needed to host an exceptional occasion.",
    "about.f1.title": "Bespoke Menus",
    "about.f1.desc": "Every menu is tailored to your vision, dietary needs, and cultural preferences.",
    "about.f2.title": "End-to-End Service",
    "about.f2.desc": "From concept to cleanup — we handle every detail so you can enjoy your event.",
    "about.f3.title": "Licensed Bar Service",
    "about.f3.desc": "Fully licensed to serve premium cocktails, wines, and craft beverages at your venue.",

    // Services
    "services.eyebrow": "Our Services",
    "services.title": "Crafted for Every Occasion",
    "services.lead":
      "Whether it's a corporate gala, dream wedding, or private celebration — we bring the same passion and precision to every event.",
    "services.corporate.title": "Corporate Events",
    "services.corporate.desc":
      "Impress clients and colleagues with refined dining at conferences, product launches, and annual dinners.",
    "services.wedding.title": "Weddings",
    "services.wedding.desc":
      "From cocktail receptions to multi-course banquets — make your special day truly extraordinary.",
    "services.private.title": "Private Celebrations",
    "services.private.desc":
      "Birthdays, anniversaries, and garden parties styled with elegance and warmth.",
    "services.bar.title": "Bar & Beverage",
    "services.bar.desc":
      "Professional bartenders, signature cocktails, and full bar setups — licensed and insured.",
    "services.full.title": "Full-Service Catering",
    "services.full.desc":
      "Complete event catering with chefs, servers, rentals, and on-site coordination.",
    "services.link": "Learn More",

    // Why
    "why.eyebrow": "Why Lumina",
    "why.title": "The Difference Is in the Details",
    "why.1.title": "Culinary Excellence",
    "why.1.desc": "Award-winning chefs crafting menus with locally sourced, seasonal ingredients.",
    "why.2.title": "Seamless Planning",
    "why.2.desc": "Dedicated event coordinators guiding you from first call to final toast.",
    "why.3.title": "Premium Presentation",
    "why.3.desc": "Stunning tablescapes, elegant plating, and impeccable service staff.",
    "why.4.title": "Hong Kong Expertise",
    "why.4.desc": "Deep knowledge of local venues, regulations, and cultural traditions.",

    // Process
    "process.eyebrow": "How It Works",
    "process.title": "Your Event, Our Process",
    "process.1.title": "Consult",
    "process.1.desc": "Share your vision, guest count, and preferences in a complimentary consultation.",
    "process.2.title": "Design",
    "process.2.desc": "We craft a bespoke menu and service plan tailored to your event.",
    "process.3.title": "Taste",
    "process.3.desc": "Optional tasting session to refine every dish before the big day.",
    "process.4.title": "Celebrate",
    "process.4.desc": "Relax and enjoy — our team delivers a flawless experience.",

    // Gallery
    "gallery.eyebrow": "Portfolio",
    "gallery.title": "Events We've Catered",

    // Testimonials
    "testimonials.eyebrow": "Testimonials",
    "testimonials.title": "What Our Clients Say",
    "testimonials.1.quote":
      "Lumina transformed our annual gala into an unforgettable evening. The food was exceptional and the service impeccable.",
    "testimonials.1.name": "Sarah Chen",
    "testimonials.1.role": "Marketing Director, Central District",
    "testimonials.2.quote":
      "Our wedding reception was absolutely perfect. Every guest commented on the beautiful presentation and delicious food.",
    "testimonials.2.name": "Michael & Emily Wong",
    "testimonials.2.role": "Wedding Clients, Repulse Bay",
    "testimonials.3.quote":
      "Professional, creative, and incredibly responsive. They handled our 300-person corporate lunch flawlessly.",
    "testimonials.3.name": "James Lau",
    "testimonials.3.role": "Events Manager, Kwun Tong",

    // FAQ
    "faq.eyebrow": "FAQ",
    "faq.title": "Common Questions",
    "faq.1.q": "What areas in Hong Kong do you serve?",
    "faq.1.a":
      "We cater events across all districts of Hong Kong Island, Kowloon, and the New Territories, including outlying islands. Venue delivery fees may apply for remote locations.",
    "faq.2.q": "How far in advance should I book?",
    "faq.2.a":
      "We recommend booking 4–8 weeks in advance for standard events and 3–6 months for weddings and large corporate functions. Last-minute requests are accommodated when possible.",
    "faq.3.q": "Do you accommodate dietary restrictions?",
    "faq.3.a":
      "Absolutely. We offer vegetarian, vegan, gluten-free, halal, and allergy-conscious menus. Please share requirements during your consultation.",
    "faq.4.q": "Is your bar service fully licensed?",
    "faq.4.a":
      "Yes. We hold a valid liquor licence and full public liability insurance. Our bartenders are trained and certified for responsible service of alcohol.",

    // Contact
    "contact.eyebrow": "Get in Touch",
    "contact.title": "Let's Plan Something Extraordinary",
    "contact.lead":
      "Tell us about your event and our team will respond within 24 hours with a tailored proposal.",
    "contact.phone": "Phone",
    "contact.email": "Email",
    "contact.address": "Address",
    "contact.address.val": "Unit 1208, 12/F, K11 Atelier, Victoria Dockside, Tsim Sha Tsui, Kowloon",
    "contact.whatsapp": "Chat on WhatsApp",
    "contact.hours": "Office Hours",
    "contact.hours.val": "Mon – Sat, 9:00 AM – 7:00 PM",

    // Form
    "form.name": "Full Name",
    "form.email": "Email Address",
    "form.phone": "Phone Number",
    "form.event": "Event Type",
    "form.event.corporate": "Corporate Event",
    "form.event.wedding": "Wedding",
    "form.event.private": "Private Celebration",
    "form.event.bar": "Bar Service Only",
    "form.event.other": "Other",
    "form.guests": "Guest Count",
    "form.date": "Preferred Date",
    "form.message": "Tell us about your event",
    "form.submit": "Send Inquiry",
    "form.success": "Thank you! We'll be in touch within 24 hours.",

    // Footer
    "footer.desc":
      "Premium catering and bar services for discerning hosts across Hong Kong.",
    "footer.services": "Services",
    "footer.company": "Company",
    "footer.menu": "Our Menu",
    "footer.blog": "Blog & Cases",
    "footer.about": "About Us",
    "footer.careers": "Careers",
    "footer.privacy": "Privacy Policy",
    "footer.legal": "Legal",
    "footer.terms": "Terms of Service",
    "footer.copyright": "© 2026 Lumina Catering HK. All rights reserved.",
  },

  zh: {
    "nav.home": "首頁",
    "nav.services": "服務",
    "nav.menu": "菜單",
    "nav.about": "關於我們",
    "nav.blog": "博客",
    "nav.gallery": "作品集",
    "nav.contact": "聯絡我們",
    "nav.cta": "索取報價",

    "hero.eyebrow": "高端餐飲服務 · 香港",
    "hero.title": "非凡盛宴，難忘滋味",
    "hero.lead":
      "從天台酒會到盛大企業晚宴——我們將廚房、酒吧及服務團隊帶到您的場地，在香港為您打造難忘的活動體驗。",
    "hero.cta1": "策劃您的活動",
    "hero.cta2": "探索服務",
    "hero.stat1.num": "500+",
    "hero.stat1.label": "成功活動",
    "hero.stat2.num": "15+",
    "hero.stat2.label": "年專業經驗",
    "hero.stat3.num": "98%",
    "hero.stat3.label": "客戶滿意度",

    "trust.licensed": "持牌經營",
    "trust.insured": "保險認證",
    "trust.halal": "清真選項",
    "trust.sustainable": "可持續採購",

    "about.eyebrow": "關於我們",
    "about.title": "香港頂級餐飲夥伴",
    "about.lead":
      "我們是全方位活動餐飲公司——不是餐廳。廚師、調酒師及活動團隊會帶同所有設備到您的場地，為您舉辦非凡盛宴。",
    "about.f1.title": "專屬定制菜單",
    "about.f1.desc": "每份菜單均根據您的願景、飲食需求及文化偏好量身設計。",
    "about.f2.title": "一站式服務",
    "about.f2.desc": "從策劃到收尾——我們處理每個細節，讓您盡享活動時光。",
    "about.f3.title": "持牌酒吧服務",
    "about.f3.desc": "持有效酒牌，於您的場地提供精品雞尾酒、葡萄酒及特色飲品。",

    "services.eyebrow": "我們的服務",
    "services.title": "為每種場合精心打造",
    "services.lead":
      "無論是企業晚宴、夢想婚禮還是私人慶典——我們以同樣的熱忱與精準，服務每一場活動。",
    "services.corporate.title": "企業活動",
    "services.corporate.desc":
      "為會議、產品發佈會及週年晚宴提供精緻餐飲，給客戶與同事留下深刻印象。",
    "services.wedding.title": "婚禮宴會",
    "services.wedding.desc":
      "從雞尾酒接待到多道菜晚宴——讓您的大日子真正非凡。",
    "services.private.title": "私人慶典",
    "services.private.desc":
      "生日、週年紀念及花園派對，以優雅溫暖的風格呈現。",
    "services.bar.title": "酒吧與飲品",
    "services.bar.desc":
      "專業調酒師、招牌雞尾酒及完整酒吧設備——持牌受保。",
    "services.full.title": "全方位餐飲服務",
    "services.full.desc":
      "完整活動餐飲，包括廚師、服務員、租賃設備及現場統籌。",
    "services.link": "了解更多",

    "why.eyebrow": "為何選擇朗宴",
    "why.title": "細節成就非凡",
    "why.1.title": "烹飪卓越",
    "why.1.desc": "獲獎廚師以本地時令食材精心設計菜單。",
    "why.2.title": "無縫策劃",
    "why.2.desc": "專屬活動統籌，從初次洽談到最後敬酒全程陪伴。",
    "why.3.title": "頂級呈現",
    "why.3.desc": "精美餐桌佈置、優雅擺盤及專業服務團隊。",
    "why.4.title": "香港在地專長",
    "why.4.desc": "深入了解本地場地、法規及文化傳統。",

    "process.eyebrow": "服務流程",
    "process.title": "您的活動，我們的流程",
    "process.1.title": "諮詢",
    "process.1.desc": "在免費諮詢中分享您的願景、賓客人數及偏好。",
    "process.2.title": "設計",
    "process.2.desc": "我們為您的活動量身設計專屬菜單及服務方案。",
    "process.3.title": "試菜",
    "process.3.desc": "可選試菜環節，於大日子前完善每道菜餚。",
    "process.4.title": "慶祝",
    "process.4.desc": "放鬆享受——我們的團隊為您呈現完美體驗。",

    "gallery.eyebrow": "作品集",
    "gallery.title": "我們服務的活動",

    "testimonials.eyebrow": "客戶評價",
    "testimonials.title": "他們怎麼說",
    "testimonials.1.quote":
      "朗宴將我們的週年晚宴打造成難忘的夜晚。食物出色，服務無可挑剔。",
    "testimonials.1.name": "陳小姐",
    "testimonials.1.role": "市場總監，中環",
    "testimonials.2.quote":
      "我們的婚禮宴會完美無瑕。每位賓客都讚賞精美的擺盤與美味佳餚。",
    "testimonials.2.name": "黃先生及黃太太",
    "testimonials.2.role": "婚禮客戶，淺水灣",
    "testimonials.3.quote":
      "專業、創意且反應迅速。他們完美處理了我們三百人的企業午宴。",
    "testimonials.3.name": "劉先生",
    "testimonials.3.role": "活動經理，觀塘",

    "faq.eyebrow": "常見問題",
    "faq.title": "常見問題",
    "faq.1.q": "你們服務香港哪些地區？",
    "faq.1.a":
      "我們服務港島、九龍及新界所有地區，包括離島。偏遠地點可能收取運送費用。",
    "faq.2.q": "應提前多久預訂？",
    "faq.2.a":
      "建議一般活動提前4至8週預訂，婚禮及大型企業活動提前3至6個月。我們亦會盡力配合臨時預約。",
    "faq.3.q": "能否配合飲食限制？",
    "faq.3.a":
      "當然可以。我們提供素食、純素、無麩質、清真及過敏友善菜單。請於諮詢時告知需求。",
    "faq.4.q": "酒吧服務是否持牌？",
    "faq.4.a":
      "是的。我們持有有效酒牌及公眾責任保險，調酒師均受過負責任飲酒服務培訓及認證。",

    "contact.eyebrow": "聯絡我們",
    "contact.title": "一起策劃非凡盛宴",
    "contact.lead":
      "告訴我們您的活動詳情，團隊將於24小時內回覆專屬方案。",
    "contact.phone": "電話",
    "contact.email": "電郵",
    "contact.address": "地址",
    "contact.address.val": "九龍尖沙咀維港文化匯 K11 Atelier 12樓1208室",
    "contact.whatsapp": "WhatsApp 聯絡",
    "contact.hours": "辦公時間",
    "contact.hours.val": "星期一至六，上午9:00至下午7:00",

    "form.name": "姓名",
    "form.email": "電郵地址",
    "form.phone": "電話號碼",
    "form.event": "活動類型",
    "form.event.corporate": "企業活動",
    "form.event.wedding": "婚禮",
    "form.event.private": "私人慶典",
    "form.event.bar": "酒吧服務",
    "form.event.other": "其他",
    "form.guests": "賓客人數",
    "form.date": "首選日期",
    "form.message": "請描述您的活動",
    "form.submit": "提交查詢",
    "form.success": "感謝您！我們將於24小時內與您聯絡。",

    "footer.desc":
      "為香港尊貴主辦方提供高端餐飲及酒吧服務。",
    "footer.services": "服務",
    "footer.company": "公司",
    "footer.menu": "精選菜單",
    "footer.blog": "活動案例",
    "footer.about": "關於我們",
    "footer.careers": "加入我們",
    "footer.privacy": "私隱政策",
    "footer.legal": "法律",
    "footer.terms": "服務條款",
    "footer.copyright": "© 2026 朗宴餐飲香港。版權所有。",
  },
};

let currentLang = localStorage.getItem("lang") || "en";

function setLanguage(lang) {
  currentLang = lang;
  localStorage.setItem("lang", lang);
  document.documentElement.lang = lang === "zh" ? "zh-Hant" : "en";

  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    if (translations[lang][key]) {
      el.textContent = translations[lang][key];
    }
  });

  document.querySelectorAll("[data-i18n-placeholder]").forEach((el) => {
    const key = el.getAttribute("data-i18n-placeholder");
    if (translations[lang][key]) {
      el.placeholder = translations[lang][key];
    }
  });

  document.querySelectorAll(".lang-toggle button").forEach((btn) => {
    btn.classList.toggle("active", btn.dataset.lang === lang);
  });
}

// Header scroll
const header = document.querySelector(".site-header");
if (header) {
  const onDark = header.classList.contains("on-dark");
  window.addEventListener("scroll", () => {
    header.classList.toggle("scrolled", window.scrollY > 60);
  });
}

// Mobile menu
const menuToggle = document.querySelector(".menu-toggle");
const mobileNav = document.querySelector(".mobile-nav");
if (menuToggle && mobileNav) {
  menuToggle.addEventListener("click", () => {
    mobileNav.classList.toggle("open");
    document.body.style.overflow = mobileNav.classList.contains("open")
      ? "hidden"
      : "";
  });
  mobileNav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      mobileNav.classList.remove("open");
      document.body.style.overflow = "";
    });
  });
}

// Language toggle
document.querySelectorAll(".lang-toggle button").forEach((btn) => {
  btn.addEventListener("click", () => setLanguage(btn.dataset.lang));
});

// FAQ accordion
document.querySelectorAll(".faq-question").forEach((q) => {
  q.addEventListener("click", () => {
    const item = q.parentElement;
    const wasOpen = item.classList.contains("open");
    document.querySelectorAll(".faq-item").forEach((i) => i.classList.remove("open"));
    if (!wasOpen) item.classList.add("open");
  });
});

// Form submit
const form = document.querySelector(".inquiry-form");
if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const msg = translations[currentLang]["form.success"];
    alert(msg);
    form.reset();
  });
}

// Scroll reveal
const revealEls = document.querySelectorAll(".reveal");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.15 }
);
revealEls.forEach((el) => observer.observe(el));

// Init
setLanguage(currentLang);
