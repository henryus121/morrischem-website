<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Morrischem LLC — Engineering Industrial Performance</title>
  
  <!-- Fonts: Oswald (Condensed Heading) & Inter (Body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Oswald:wght@600;700&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-guide.css">
  
  <style>
    /* Hero Header Layout */
    .hero-viewport {
      position: relative;
      width: 100%;
      min-height: 85vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 40px 64px 0 64px;
      background-image: linear-gradient(180deg, rgba(15, 23, 42, 0.3) 0%, rgba(15, 23, 42, 0.85) 100%), 
                        url('<?php echo get_template_directory_uri(); ?>/refinery_imge.png');
      background-size: cover;
      background-position: center;
    }

    .nav-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .logo-badge {
      display: flex;
      align-items: center;
      gap: 12px;
      background: rgba(255, 255, 255, 0.95);
      padding: 10px 24px;
      border-radius: var(--radius-pill);
      color: var(--text-dark-main);
      font-family: var(--font-heading);
      font-size: 22px;
      font-weight: 700;
    }

    .logo-icon {
      width: 32px;
      height: 32px;
      background-color: var(--text-dark-main);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 16px;
    }

    .hero-body {
      display: flex;
      justify-content: flex-end;
      width: 100%;
      margin: 60px 0;
    }

    .hero-text-block {
      max-width: 650px;
    }

    .hero-title {
      color: var(--text-white);
      margin-bottom: 20px;
    }

    .hero-subtitle {
      font-size: 18px;
      color: var(--text-light-muted);
      margin-bottom: 32px;
      line-height: 1.5;
    }

    /* Floating Feature Bar */
    .floating-card-wrapper {
      max-width: 1280px;
      margin: 0 auto;
      transform: translateY(50px);
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
    }

    .feature-icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: #E2E8F0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 20px;
    }

    .section-padding {
      padding: 140px 0 80px 0;
      border-bottom: 1px solid var(--border-steel);
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 32px;
    }

    .footer-wrapper {
      background-color: #0B1120;
      padding: 60px 0 40px 0;
      margin-top: 80px;
    }
  </style>
</head>
<body>

  <!-- Hero Viewport -->
  <header class="hero-viewport">
    <!-- Top Navigation -->
    <div class="nav-bar">
      <div class="logo-badge">
        <div class="logo-icon">M</div>
        <span>Morrischem</span>
      </div>
    </div>

    <!-- Right-Aligned Hero Text -->
    <div class="hero-body">
      <div class="hero-text-block">
        <h1 class="hero-title">Critical Infrastructure.<br>Uncompromising Precision.</h1>
        <p class="hero-subtitle">
          Morrischem delivers high-performance chemical materials, catalysts, and mechanical components that drive global energy and refinery operations.
        </p>
        <a href="#contact" class="btn-pill">Request Technical Specifications</a>
      </div>
    </div>

    <!-- Floating Bottom Feature Cards -->
    <div class="floating-card-wrapper">
      <div class="card-light grid-3">
        <div class="feature-item">
          <div class="feature-icon-circle">🧪</div>
          <div>
            <h3 style="color: var(--text-dark-main); margin-bottom: 6px;">Chemical &amp; Process Materials</h3>
            <p style="color: var(--text-dark-muted); font-size: 14px;">Molecular sieves, adsorbents, and high-purity process chemistries.</p>
          </div>
        </div>

        <div class="feature-item">
          <div class="feature-icon-circle">⚙️</div>
          <div>
            <h3 style="color: var(--text-dark-main); margin-bottom: 6px;">Mechanical &amp; Mass Transfer Systems</h3>
            <p style="color: var(--text-dark-muted); font-size: 14px;">High-performance internal components and reactor solutions.</p>
          </div>
        </div>

        <div class="feature-item">
          <div class="feature-icon-circle">⚡</div>
          <div>
            <h3 style="color: var(--text-dark-main); margin-bottom: 6px;">Power &amp; Energy Infrastructure</h3>
            <p style="color: var(--text-dark-muted); font-size: 14px;">Utility treatment chemistries and continuous power support.</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Capability Details Section -->
  <section class="section-padding" id="contact">
    <div class="container" style="text-align: center;">
      <h2 style="margin-bottom: 16px;">Engineering Solutions Without Borders</h2>
      <p style="max-width: 600px; margin: 0 auto 32px auto;">Reliable Technologies. Trusted Partnerships. Lasting Performance.</p>
      <a href="mailto:info@morrischem.com" class="btn-pill">Contact Our Engineering Team</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-wrapper">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: var(--text-light-muted);">
      <div>&copy; 2026 Morrischem LLC. All rights reserved.</div>
      <div>Registered Office: Georgia. International Business Operations.</div>
    </div>
  </footer>

</body>
</html>
