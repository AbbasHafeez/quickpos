<?php
session_start();

// Get form data and errors from session if present
$form_data = $_SESSION['form_data'] ?? [];
$errors = $_SESSION['errors'] ?? [];

// Clear session after use
unset($_SESSION['form_data'], $_SESSION['errors']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>QuickPOS — The Last POS System You'll Ever Need</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- AOS for animations -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="style.css">
  <meta name="description" content="QuickPOS — Modern POS for small & medium businesses. Inventory, analytics & integrations.">
</head>
<body>

<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <div class="logo">Quick<span class="accent">POS</span></div>
    </div>
<!-- Navbar Section -->
    <nav class="main-nav" id="mainNav">
      <a href="#features">Features</a>
      <a href="#pricing">Pricing</a>
      <a href="#contact">Contact</a>
      <button class="btn signup-btn" onclick="location.href='#pricing'">Sign Up</button>
    </nav>

    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<main>
  <!-- Hero Section -->
  <section class="hero" data-aos="fade-in">
    <div class="container hero-grid">
      <div class="hero-left" data-aos="fade-right" data-aos-delay="200">
        <h1 class="hero-title">The Last POS System <span class="gradient-text">You'll Ever Need</span></h1>
        <p class="hero-sub">Smart, fast and beautifully designed. Inventory, sales analytics and integrations — all in one modern POS.</p>

        <div class="hero-ctas">
          <a href="#pricing" class="btn btn-primary">Get Started for Free</a>
          <a href="#contact" class="btn btn-ghost">Contact Sales</a>
        </div>

        <ul class="trust-list">
          <li>✔ 99.9% uptime</li>
          <li>✔ PCI-ready integrations</li>
          <li>✔ 30-day free trial</li>
        </ul>
      </div>

      <div class="hero-right" data-aos="fade-left" data-aos-delay="400">
        <div class="mockup-wrap">
          <img src="hero-pos.png" class="hero-img" alt="QuickPOS Mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section-->
  <section id="features" class="features" data-aos="fade-up">
    <div class="container">
      <h2 class="section-title">Powerful features built for modern retailers</h2>
      <p class="section-sub">Everything you need to run your business with confidence.</p>

      <div class="features-grid">
        <div class="card glass feature-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-warehouse"></i></div>
          <h3>Inventory Management</h3>
          <p>Auto stock updates, low-stock alerts and supplier management.</p>
        </div>

        <div class="card glass feature-card" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-chart-line"></i></div>
          <h3>Sales Analytics</h3>
          <p>Real-time dashboards and exportable reports for smarter decisions.</p>
        </div>

        <div class="card glass feature-card" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-plug-circle-bolt"></i></div>
          <h3>Easy Integrations</h3>
          <p>Connect with payment providers, accounting tools and eCommerce platforms.</p>
        </div>

        <div class="card glass feature-card" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon"><i class="fas fa-bolt"></i></div>
          <h3>Fast Checkout</h3>
          <p>Lightning-fast order flows for happy customers and faster lines.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="pricing" data-aos="fade-up">
    <div class="container">
      <div class="pricing-header">
        <h2 class="section-title">Simple pricing for teams of all sizes</h2>
        <div class="toggle">
          <span>Monthly</span>
          <label class="switch">
            <input id="priceToggle" type="checkbox">
            <span class="slider"></span>
          </label>
          <span>Annual <small class="muted">save 20%</small></span>
        </div>
      </div>

      <div class="pricing-grid">
        <div class="card price-card" data-aos="flip-left" data-aos-delay="100">
          <h3>Basic</h3>
          <p class="price"><span class="amount" data-monthly="9" data-annual="86">$9</span><small>/month</small></p>
          <ul class="price-features">
            <li>Core POS features</li>
            <li>Email support</li>
            <li>1 location</li>
          </ul>
          <button class="btn btn-outline">Choose Basic</button>
        </div>

        <div class="card price-card featured" data-aos="flip-up" data-aos-delay="200">
          <div class="badge">Most popular</div>
          <h3>Pro</h3>
          <p class="price"><span class="amount" data-monthly="29" data-annual="277">$29</span><small>/month</small></p>
          <ul class="price-features">
            <li>Multi-location</li>
            <li>Advanced analytics</li>
            <li>Priority support</li>
          </ul>
          <button class="btn btn-primary">Choose Pro</button>
        </div>

        <div class="card price-card" data-aos="flip-right" data-aos-delay="300">
          <h3>Enterprise</h3>
          <p class="price"><span class="amount" data-monthly="99" data-annual="945">$99</span><small>/month</small></p>
          <ul class="price-features">
            <li>Custom integrations</li>
            <li>Dedicated account manager</li>
            <li>Unlimited locations</li>
          </ul>
          <button class="btn btn-outline">Contact Sales</button>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section" data-aos="fade-up">
    <div class="container cta-inner">
      <h2>Ready to transform your checkout?</h2>
      <a href="#contact" class="btn btn-primary large">Contact Sales</a>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section id="contact" class="contact-section" data-aos="fade-up">
    <div class="container">
      <div class="contact-card card glass">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-sub">Fill the form and our team will contact you within one business day.</p>

        <?php if (!empty($errors)): ?>
          <ul class="error-list">
            <?php foreach ($errors as $error): ?>
              <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <form action="submit_contact.php" method="POST" class="contact-form">
          <label>Name</label>
          <input name="name" required value="<?php echo htmlspecialchars($form_data['name'] ?? ''); ?>">

          <label>Email</label>
          <input name="email" type="email" required value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>">

          <label>Message</label>
          <textarea name="message" rows="6" required><?php echo htmlspecialchars($form_data['message'] ?? ''); ?></textarea>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Send Message</button>
            <button type="reset" class="btn btn-ghost">Clear</button>
          </div>
        </form>
      </div>
    </div>
  </section>

</main>

<footer class="site-footer" data-aos="fade-up">
  <div class="container footer-grid">
    <div>© <span id="year"></span> QuickPOS. All rights reserved.</div>
    <div class="socials">
      <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });

  // Mobile menu toggle
  const hamburger = document.getElementById('hamburger');
  const mainNav = document.getElementById('mainNav');
  hamburger.addEventListener('click', () => {
    mainNav.classList.toggle('open');
    hamburger.classList.toggle('active');
  });

  // Pricing toggle (monthly/annual)
  const priceToggle = document.getElementById('priceToggle');
  function updatePrices(isAnnual) {
    document.querySelectorAll('.amount').forEach(el => {
      el.textContent = isAnnual ? el.dataset.annual : el.dataset.monthly;
    });
    document.querySelectorAll('.price small').forEach(el => {
      el.textContent = isAnnual ? '/year' : '/month';
    });
  }
  priceToggle.addEventListener('change', () => updatePrices(priceToggle.checked));
  updatePrices(false);

  // Set current year
  document.getElementById('year').textContent = new Date().getFullYear();
</script>

</body>
</html>