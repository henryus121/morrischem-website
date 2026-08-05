<?php
/*
Template Name: Catalysts Process Tech Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Morrischem delivers hydroprocessing catalysts, guard bed media, and inert ceramic support media for refinery, petrochemical, and industrial process applications.">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/catalysts-process-tech.html">
  <meta property="og:title" content="Hydroprocessing Catalysts & Support Media — Morrischem LLC">
  <meta property="og:description" content="High-performance hydroprocessing catalysts and support media for B2B industrial buyers in refining, hydrogen, and petrochemical operations.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/catalysts-process-tech.html">
  <title>Catalysts & Process Tech — Morrischem LLC</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
  <link rel="stylesheet" href="style-guide.css">
  
  <style>
    .page-header {
      padding: 120px 0 60px 0;
      border-bottom: 1px solid var(--border-steel);
      background-color: var(--bg-dark-secondary);
    }

    .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 32px;
    }

    .section-padding {
      padding: 80px 0;
      border-bottom: 1px solid var(--border-steel);
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .kicker {
      font-size: 12px;
      font-weight: 600;
      color: var(--accent-cyan);
      letter-spacing: 0.25em;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .back-link {
      color: var(--accent-cyan);
      text-decoration: none;
      font-size: 13px;
      font-weight: 600;
      display: inline-block;
      margin-bottom: 24px;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    .spec-card {
      background-color: var(--bg-card-surface);
      border: 1px solid var(--border-steel);
      border-radius: var(--radius-interactive);
      padding: 24px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .compliance-box {
      background-color: var(--bg-card-surface);
      border-left: 3px solid var(--accent-cyan);
      padding: 24px;
      margin-top: 32px;
    }

    .footer-wrapper {
      background-color: #03060D;
      padding: 60px 0 40px 0;
    }
  </style>
</head>
<body>

  <!-- Header Banner -->
  <header class="page-header">
    <div class="container">
      <a href="/" class="back-link">&larr; Back to Main Flagship</a>
      <div class="kicker">Capability Vertical 03</div>
      <h1>Catalysts &amp; Process Technologies</h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        High-activity catalyst systems, support media, and guard beds engineered to maximize unit yield, selectivity, and run length across hydroprocessing and chemical synthesis units.
      </p>
    </div>
  </header>

  <!-- Technical Overview & Applications -->
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker">Reaction Kinetics</div>
        <h2>Primary Industrial Applications</h2>
        <p style="margin-top: 16px;">
          Optimizing catalytic reaction pathways requires precise matching of metal loading, pore size distribution, and acid-site density to process operating conditions.
        </p>

        <div class="compliance-box">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">Traceability &amp; Safety Compliance</h4>
          <p style="font-size: 14px; margin-bottom: 0;">Manufactured under strict ISO quality systems with complete metal lot traceability, safe handling protocols, and comprehensive documentation aligned with global chemical compliance regulations.</p>
        </div>
      </div>

      <div class="card-surface">
        <h3 style="margin-bottom: 16px;">Target Applications</h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong>Hydrotreating &amp; Hydrodesulfurization:</strong> Deep sulfur and nitrogen removal (ULSD feed preparation).</li>
          <li>• <strong>Guard Beds &amp; Contaminant Traps:</strong> Demetallization and particulate filtering upstream of main catalyst beds.</li>
          <li>• <strong>Hydrogen Production &amp; Syngas:</strong> Shift catalysts and reforming support media.</li>
          <li>• <strong>Petrochemical Synthesis:</strong> Selective hydrogenation and oxidation catalyst media.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Technical Specification Downloads -->
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="kicker">Technical Documentation</div>
      <h2>Catalyst &amp; Support Media Specifications</h2>
      <p style="max-width: 640px; margin-bottom: 32px;">
        Access specification matrices and operating parameters for active catalyst systems and ceramic bed support media.
      </p>

      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">Hydrotreating</div>
            <h3 style="margin: 8px 0;">CoMo / NiMo Hydroprocessing</h3>
            <p style="font-size: 13px; margin-bottom: 16px;">High-activity alumina-supported catalysts engineered for deep HDS/HDN feed processing.</p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request TDS</a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request SDS</a>
          </div>
        </div>

        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">Guard Beds</div>
            <h3 style="margin: 8px 0;">Contaminant &amp; Metal Traps</h3>
            <p style="font-size: 13px; margin-bottom: 16px;">Macroporous alumina guard media for arsenic, silica, and iron removal upstream of main reactors.</p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request TDS</a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request SDS</a>
          </div>
        </div>

        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">Bed Support</div>
            <h3 style="margin: 8px 0;">Inert Ceramic Media Spheres</h3>
            <p style="font-size: 13px; margin-bottom: 16px;">High-purity, thermal-shock resistant support balls designed for uniform flow distribution.</p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request TDS</a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">Request SDS</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Gateway -->
  <section class="section-padding" style="text-align: center;">
    <div class="container" style="max-width: 700px;">
      <div class="kicker">Technical Consultation</div>
      <h2>Evaluate Your Catalyst Bed Cycle</h2>
      <p style="margin: 16px 0 32px 0;">Our specialists review feed characterization, space velocity, and temperature profiles to optimize bed performance.</p>
      <a href="/contact/?subject=Support-Request" class="btn-primary">Request Catalyst Evaluation</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: var(--text-main);">MORRISCHEM LLC</div>
      <p style="font-size: 13px; margin-top: 8px;">&copy; 2026 Morrischem LLC. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
