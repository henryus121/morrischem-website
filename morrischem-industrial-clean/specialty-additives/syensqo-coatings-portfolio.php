<?php
/*
Template Name: Specialty Additives Solutions Page
*/
?>
<?php require_once __DIR__ . '/../includes/i18n.php'; ?>
<?php $lang_query = $lang === DEFAULT_LANG ? '' : '?lang=' . rawurlencode($lang); ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced specialty surfactant and polymer systems for industrial coatings, DTM adhesion, sustainable low-VOC formulation, and high-durability performance design.">
  <title>Advanced Surfactant and Polymer Systems — Morrischem LLC</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
  <link rel="stylesheet" href="../style-guide.css">
  
  <style>
    .product-page {
      background:
        radial-gradient(1200px 500px at 10% -10%, rgba(0, 210, 255, 0.12), transparent 60%),
        radial-gradient(1000px 500px at 90% 0%, rgba(15, 23, 42, 0.45), transparent 55%),
        var(--bg-dark-primary);
    }

    .page-header {
      padding: 120px 0 60px 0;
      border-bottom: 1px solid var(--border-steel);
      background: linear-gradient(180deg, rgba(10, 17, 32, 0.94) 0%, rgba(6, 11, 24, 1) 100%);
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

    .section-emphasis {
      background: linear-gradient(180deg, rgba(10, 17, 32, 0.92) 0%, rgba(6, 11, 24, 1) 100%);
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
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

    .application-table-wrap {
      overflow-x: auto;
      border: 1px solid var(--border-steel);
      border-radius: var(--radius-interactive);
      background: var(--bg-card-surface);
      margin-top: 32px;
    }

    .application-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 720px;
    }

    .application-table th,
    .application-table td {
      padding: 14px 16px;
      border-bottom: 1px solid var(--border-steel);
      text-align: left;
      vertical-align: top;
      font-size: 14px;
    }

    .application-table th {
      color: var(--text-main);
      background: rgba(255, 255, 255, 0.03);
      font-weight: 600;
    }

    .footer-wrapper {
      background-color: #03060D;
      padding: 60px 0 40px 0;
    }

    /* Page-scoped contrast enforcement for dark sections. */
    .product-page .page-header,
    .product-page .section-emphasis,
    .product-page section.section-padding[style*="text-align: center"],
    .product-page .footer-wrapper {
      color: #E2E8F0 !important;
    }

    .product-page .page-header h1,
    .product-page .page-header h2,
    .product-page .page-header h3,
    .product-page .section-emphasis h1,
    .product-page .section-emphasis h2,
    .product-page .section-emphasis h3,
    .product-page .footer-wrapper h1,
    .product-page .footer-wrapper h2,
    .product-page .footer-wrapper h3 {
      color: #FFFFFF !important;
    }

    .product-page .page-header p,
    .product-page .section-emphasis p,
    .product-page .spec-card p,
    .product-page .footer-wrapper p {
      color: #E2E8F0 !important;
    }

    .product-page .page-header .back-link,
    .product-page .section-emphasis a,
    .product-page .footer-wrapper a {
      color: #93C5FD !important;
    }
  </style>
</head>
<body class="product-page">
  <header class="page-header">
    <div class="container">
      <a href="<?php echo htmlspecialchars('/' . $lang_query, ENT_QUOTES, 'UTF-8'); ?>" class="back-link">&larr; Back to Main Flagship</a>
      <div class="kicker">Specialty Solutions Vertical</div>
      <h1>Advanced Surfactant and Polymer Systems</h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        High-Performance Functional Monomers, Reactive Emulsifiers, and PFAS-Free Specialty Additives
      </p>
    </div>
  </header>

  <section class="section-padding">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker">Section A</div>
        <h3>Specialty Functional Monomers</h3>
        <p>Direct-to-Metal adhesion promoters engineered for C1-C4 corrosivity classes, wet-adhesion retention, and high-PVC scrub endurance where mechanical durability and anti-corrosion persistence must coexist.</p>
      </article>
      <article class="spec-card">
        <div class="kicker">Section B</div>
        <h3>Reactive and Polymerizable Surfactants</h3>
        <p>Zero-leaching emulsifier systems, including ether sulfate and phosphate ester chemistries, designed to covalently integrate into polymer backbones and reduce water whitening under severe humidity cycles.</p>
      </article>
    </div>
  </section>

  <section class="section-padding section-emphasis">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker">Section C</div>
        <h3>Sustainable Green Solvents and Coalescents</h3>
        <p>Low-VOC, bio-based dibasic ester solvent systems and coalescing aids supporting replacement pathways for NMP and DMF while preserving film formation, workability, and process throughput.</p>
      </article>
      <article class="spec-card">
        <div class="kicker">Section D</div>
        <h3>Performance Additives and Defoamers</h3>
        <p>PFAS-free hot-block resistance additives, bio-based defoamer technologies, and open-time extenders calibrated for premium finish quality, anti-foam persistence, and robust line performance.</p>
      </article>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <h2>Application Matrix</h2>
      <div class="application-table-wrap">
        <table class="application-table">
          <thead>
            <tr>
              <th>Application</th>
              <th>Primary Chemistry Direction</th>
              <th>Performance Target</th>
              <th>Technical Notes</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Industrial Maintenance</td><td>DTM monomer + PFAS-free additive stack</td><td>Corrosion protection, adhesion retention</td><td>Designed for harsh cyclic humidity and contact environment.</td></tr>
            <tr><td>Pressure-Sensitive Adhesives (PSA)</td><td>Reactive surfactant system</td><td>Lower migration, stable tack profile</td><td>Backbone-bonding emulsifier strategy for durability.</td></tr>
            <tr><td>Automotive DTM</td><td>Adhesion promoter + coalescent tuning</td><td>Wet adhesion and chip resistance</td><td>Supports high durability under thermal and chemical stress.</td></tr>
            <tr><td>Architectural Coatings</td><td>Low-VOC green solvent + open-time extender</td><td>Application window and finish quality</td><td>Optimizes flow, leveling, and sustained coating integrity.</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: #FFFFFF;">MORRISCHEM LLC</div>
      <p style="font-size: 13px; margin-top: 8px;">&copy; 2026 MORRISCHEM LLC. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
