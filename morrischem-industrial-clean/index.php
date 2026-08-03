<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Morrischem LLC — Engineering Industrial Performance</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-guide.css">
  
  <style>
    /* Homepage Specific Layout Rules */
    .hero-viewport {
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 720px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 24px;
      border-bottom: 1px solid var(--border-steel);
    }

    .hero-content {
      max-width: 900px;
      z-index: 10;
    }

    .hero-kicker {
      font-size: 12px;
      font-weight: 600;
      color: var(--accent-emerald);
      letter-spacing: 0.25em;
      text-transform: uppercase;
      margin-bottom: 24px;
    }

    .hero-title {
      margin-bottom: 20px;
    }

    .hero-subtitle {
      font-size: clamp(16px, 1.8vw, 20px);
      max-width: 640px;
      margin: 0 auto 40px auto;
    }

    .hero-cta-group {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
    }

    .section-padding {
      padding: 120px 0;
      border-bottom: 1px solid var(--border-steel);
    }

    .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 32px;
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .section-kicker {
      font-size: 12px;
      font-weight: 600;
      color: var(--accent-emerald);
      letter-spacing: 0.25em;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .section-title {
      margin-bottom: 24px;
    }

    .conduit-border {
      position: relative;
      padding-left: 32px;
    }

    .conduit-border::before {
      content: '';
      position: absolute;
      left: 0;
      top: 8px;
      bottom: 8px;
      width: 2px;
      background: linear-gradient(180deg, var(--accent-emerald) 0%, rgba(0, 200, 83, 0.1) 100%);
      border-radius: 1px;
    }

    .footer-wrapper {
      background-color: #030405;
      padding: 80px 0 40px 0;
    }

    .footer-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid rgba(255, 255, 255, 0.05);
      padding-top: 32px;
      margin-top: 64px;
      font-size: 13px;
      color: var(--text-muted);
    }
  </style>
</head>
<body>

  <!-- Act I: Hero Viewport -->
  <header class="hero-viewport">
    <div class="hero-content">
      <div class="hero-kicker">Global Industrial Process Solutions</div>
      <h1 class="hero-title">One Partner. Unlimited Technical Capability.</h1>
      <p class="hero-subtitle">Engineering Solutions for Critical Industrial Processes.</p>
      <div class="hero-cta-group">
        <a href="#contact" class="btn-primary">Discuss Your Requirements</a>
        <a href="#solutions" class="btn-secondary">Explore Solutions</a>
      </div>
    </div>
  </header>

  <!-- Act II: The Philosophy -->
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container grid-2">
      <div class="card-surface" style="height: 400px; display: flex; align-items: center; justify-content: center;">
        <span style="color: var(--text-muted); font-size: 14px;">[ Process Control Visual ]</span>
      </div>
      <div class="conduit-border">
        <div class="section-kicker">Operational Focus</div>
        <h2 class="section-title">Built Around Your Process.</h2>
        <p style="margin-bottom: 32px;">
          Every refinery, gas plant, and industrial facility operates under distinct thermal, chemical, and pressure parameters. Reliable performance begins with selecting technology engineered for your specific operating environment.
        </p>
        <div class="card-surface">
          <h4 style="color: var(--accent-emerald); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">The Morrischem Approach</h4>
          <p style="font-size: 14px;">We evaluate operating conditions first, then align and source precise molecular sieves, catalysts, water treatment chemistries, and performance additives.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Act III: Interactive Plant Map -->
  <section class="section-padding">
    <div class="container">
      <div class="section-kicker">Interactive Plant Map</div>
      <h2 class="section-title">Inside an Industrial Process</h2>
      <p style="max-width: 600px; margin-bottom: 48px;">Explore how specialized chemistries and adsorbent media integrate across critical operating units.</p>
      
      <div class="grid-3">
        <div class="card-surface">
          <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;">Unit: Gas Dehydration Train</div>
          <h3>Molecular Sieves</h3>
          <p style="font-size: 14px; margin-top: 12px;">Deep moisture removal down to &lt; 0.1 ppmv to prevent hydrate formation in cryogenic exchangers.</p>
        </div>
        <div class="card-surface">
          <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;">Unit: Cooling Tower Loop</div>
          <h3>Water Treatment Chemicals</h3>
          <p style="font-size: 14px; margin-top: 12px;">Advanced scale, corrosion, and biological control formulations to maintain optimal heat transfer efficiency.</p>
        </div>
        <div class="card-surface">
          <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;">Unit: Hydrotreating Reactor</div>
          <h3>Catalysts &amp; Guard Beds</h3>
          <p style="font-size: 14px; margin-top: 12px;">High-activity catalyst media and contaminant traps designed for maximum cycle length.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Act IV: Capability Divisions -->
  <section class="section-padding" id="solutions" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="section-kicker">Core Divisions</div>
      <h2 class="section-title">Industrial Capabilities</h2>
      
      <div class="grid-3" style="margin-top: 48px;">
        <div class="card-surface">
          <div style="color: var(--accent-emerald); font-size: 12px; font-weight: 600; margin-bottom: 16px;">01 / ADSORPTION</div>
          <h3>Molecular Sieves &amp; Adsorbents</h3>
          <p style="font-size: 14px; margin: 12px 0 24px 0;">Synthetic zeolites and activated aluminas for gas dehydration, LNG processing, and purification.</p>
          <a href="#" style="color: var(--accent-emerald); font-size: 12px; text-decoration: none; font-weight: 600; uppercase">Explore Adsorbents →</a>
        </div>
        <div class="card-surface">
          <div style="color: var(--accent-emerald); font-size: 12px; font-weight: 600; margin-bottom: 16px;">02 / REACTION</div>
          <h3>Catalysts &amp; Process Tech</h3>
          <p style="font-size: 14px; margin: 12px 0 24px 0;">Refining and synthesis catalysts designed to maximize yield and extend unit cycle lengths.</p>
          <a href="#" style="color: var(--accent-emerald); font-size: 12px; text-decoration: none; font-weight: 600; uppercase">Explore Catalysts →</a>
        </div>
        <div class="card-surface">
          <div style="color: var(--accent-emerald); font-size: 12px; font-weight: 600; margin-bottom: 16px;">03 / UTILITIES</div>
          <h3>Water Treatment Chemicals</h3>
          <p style="font-size: 14px; margin: 12px 0 24px 0;">Scale inhibitors, corrosion control, biocides, and membrane chemistries for industrial cooling.</p>
          <a href="#" style="color: var(--accent-emerald); font-size: 12px; text-decoration: none; font-weight: 600; uppercase">Explore Water Treatment →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Act VII: Conversion Gateway & Footer -->
  <section class="section-padding" id="contact" style="text-align: center;">
    <div class="container" style="max-width: 800px;">
      <div class="section-kicker">ENGINEERING SOLUTIONS WITHOUT BORDERS</div>
      <h2 class="section-title">Reliable Technologies. Trusted Partnerships. Lasting Performance.</h2>
      <p style="margin-bottom: 40px;">Let's discuss your specific process challenges and technical requirements.</p>
      <a href="#" class="btn-primary">Start the Conversation</a>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 24px; color: var(--text-main);">MORRISCHEM LLC</div>
      <p style="font-size: 14px; margin-top: 8px;">Engineering Industrial Performance.</p>
      <div class="footer-flex">
        <div>&copy; 2026 Morrischem LLC. All rights reserved.</div>
        <div>Registered Office: Georgia. International Business Operations.</div>
      </div>
    </div>
  </footer>

</body>
</html>
