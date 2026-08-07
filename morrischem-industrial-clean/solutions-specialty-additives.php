<?php
/*
Template Name: Specialty Additives Solutions Page
*/
?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<?php $lang_query = $lang === DEFAULT_LANG ? '' : '?lang=' . rawurlencode($lang); ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Advanced specialty surfactant and polymer systems for industrial coatings, DTM adhesion, sustainable low-VOC formulation, and high-durability performance design.">
  <title>Advanced Surfactant & Polymer Systems — Morrischem LLC</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style-guide.css">

  <style>
    .solution-page {
      background:
        radial-gradient(900px 420px at 8% -10%, rgba(0, 210, 255, 0.12), transparent 60%),
        radial-gradient(1100px 550px at 95% 0%, rgba(15, 23, 42, 0.35), transparent 60%),
        var(--bg-dark-primary);
    }

    .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 32px;
    }

    .page-header {
      padding: 120px 0 60px 0;
      border-bottom: 1px solid var(--border-steel);
      background: linear-gradient(180deg, rgba(10, 17, 32, 0.94) 0%, rgba(6, 11, 24, 1) 100%);
    }

    .section-padding {
      padding: 80px 0;
      border-bottom: 1px solid var(--border-steel);
    }

    .section-emphasis {
      background: linear-gradient(180deg, rgba(10, 17, 32, 0.92) 0%, rgba(6, 11, 24, 1) 100%);
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

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .spec-card {
      background-color: var(--bg-card-surface);
      border: 1px solid var(--border-steel);
      border-radius: var(--radius-interactive);
      padding: 24px;
    }

    .spec-card h3 {
      margin-bottom: 12px;
    }

    .spec-card p {
      margin-bottom: 0;
    }

    .application-table-wrap {
      overflow-x: auto;
      border: 1px solid var(--border-steel);
      border-radius: var(--radius-interactive);
      background: var(--bg-card-surface);
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

    .cta-block {
      text-align: center;
      max-width: 860px;
      margin: 0 auto;
    }

    .cta-actions {
      margin-top: 28px;
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .solution-page .page-header,
    .solution-page .section-emphasis,
    .solution-page .footer-wrapper {
      color: #E2E8F0 !important;
    }

    .solution-page .page-header h1,
    .solution-page .page-header h2,
    .solution-page .page-header h3,
    .solution-page .section-emphasis h1,
    .solution-page .section-emphasis h2,
    .solution-page .section-emphasis h3,
    .solution-page .footer-wrapper h1,
    .solution-page .footer-wrapper h2,
    .solution-page .footer-wrapper h3 {
      color: #FFFFFF !important;
    }

    .solution-page .page-header p,
    .solution-page .section-emphasis p,
    .solution-page .section-emphasis li,
    .solution-page .footer-wrapper p {
      color: #E2E8F0 !important;
    }

    .footer-wrapper {
      background-color: #03060D;
      padding: 60px 0 40px 0;
    }

    @media screen and (max-width: 991px) {
      .grid-2 {
        grid-template-columns: 1fr;
      }
    }

    @media screen and (max-width: 767px) {
      .container {
        padding: 0 20px;
      }

      .page-header {
        padding: 96px 0 48px 0;
      }
    }
  </style>
</head>
<body class="solution-page">
<div style="position: fixed; top: 16px; right: 16px; z-index: 999;">
  <form action="" method="GET" style="margin:0;">
    <select name="lang" onchange="this.form.submit()" style="padding: 6px 10px; border-radius: 4px; font-weight: bold; cursor: pointer;">
      <?php
      global $allowed_langs, $lang;
      $lang_names = [
          "en" => "EN", "es" => "ES", "fr" => "FR",
          "de" => "DE", "ru" => "RU", "tr" => "TR",
          "uk" => "UK", "ar" => "AR", "az" => "AZ"
      ];
      foreach ($allowed_langs as $code) {
          $selected = ($lang === $code) ? "selected" : "";
          $name = $lang_names[$code] ?? strtoupper($code);
          echo '<option value="' . $code . '" ' . $selected . '>' . $name . '</option>';
      }
      ?>
    </select>
  </form>
</div>

  <header class="page-header">
    <div class="container">
      <a href="/<?php echo $lang_query; ?>" class="back-link">&larr; Back to Main Flagship</a>
      <div class="kicker">Specialty Solutions Vertical</div>
      <h1 style="margin-bottom: 14px;">Advanced Surfactant &amp; Polymer Systems</h1>
      <p style="max-width: 820px; font-size: 18px;">High-Performance Functional Monomers, Reactive Emulsifiers, and PFAS-Free Specialty Additives</p>
    </div>
  </header>

  <section class="section-padding section-emphasis">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker">Section A</div>
        <h3>Specialty Functional Monomers</h3>
        <p>Direct-to-Metal adhesion promoters engineered for C1-C4 corrosivity classes, wet-adhesion retention, and high-PVC scrub endurance where mechanical durability and anti-corrosion persistence must coexist.</p>
      </article>
      <article class="spec-card">
        <div class="kicker">Section B</div>
        <h3>Reactive &amp; Polymerizable Surfactants</h3>
        <p>Zero-leaching emulsifier systems, including ether sulfate and phosphate ester chemistries, designed to covalently integrate into polymer backbones and reduce water whitening under severe humidity cycles.</p>
      </article>
    </div>
  </section>

  <section class="section-padding">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker">Section C</div>
        <h3>Sustainable Green Solvents &amp; Coalescents</h3>
        <p>Low-VOC, bio-based dibasic ester solvent systems and coalescing aids supporting replacement pathways for NMP and DMF while preserving film formation, workability, and process throughput.</p>
      </article>
      <article class="spec-card">
        <div class="kicker">Section D</div>
        <h3>Performance Additives &amp; Defoamers</h3>
        <p>PFAS-free hot-block resistance additives, bio-based defoamer technologies, and open-time extenders calibrated for premium finish quality, anti-foam persistence, and robust line performance.</p>
      </article>
    </div>
  </section>

  <section class="section-padding section-emphasis">
    <div class="container">
      <div class="kicker">Section E</div>
      <h2 style="margin-bottom: 20px;">Application Matrix</h2>
      <div class="application-table-wrap">
        <table class="application-table" aria-label="Specialty Additives Application Matrix">
          <thead>
            <tr>
              <th>Application</th>
              <th>Primary Chemistry Direction</th>
              <th>Performance Target</th>
              <th>Technical Notes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Industrial Maintenance</td>
              <td>DTM monomer + PFAS-free additive stack</td>
              <td>Corrosion protection, adhesion retention</td>
              <td>Designed for harsh cyclic humidity and contact environment.</td>
            </tr>
            <tr>
              <td>Pressure-Sensitive Adhesives (PSA)</td>
              <td>Reactive surfactant system</td>
              <td>Lower migration, stable tack profile</td>
              <td>Backbone-bonding emulsifier strategy for durability.</td>
            </tr>
            <tr>
              <td>Automotive DTM</td>
              <td>Adhesion promoter + coalescent tuning</td>
              <td>Wet adhesion and chip resistance</td>
              <td>Supports high durability under thermal and chemical stress.</td>
            </tr>
            <tr>
              <td>Architectural Coatings</td>
              <td>Low-VOC green solvent + open-time extender</td>
              <td>Application window and finish quality</td>
              <td>Optimizes flow, leveling, and sustained coating integrity.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-padding" id="contact">
    <div class="container cta-block">
      <div class="kicker">Technical Data Request</div>
      <h2>Request TDS and Formulation Guidance</h2>
      <p>Share your substrate type, binder family, corrosion class target, and VOC constraints for a focused technical recommendation and document package.</p>
      <div class="cta-actions">
        <a href="/contact/?subject=TDS%20Request" class="btn-primary">Request TDS</a>
        <a href="/contact/?subject=Specialty%20Additives%20Consultation" class="btn-secondary">Consult a Specialist</a>
      </div>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 24px; color: var(--text-main);">MORRISCHEM LLC</div>
      <p style="font-size: 14px; margin-top: 8px;">Engineering Industrial Performance.</p>
      <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid rgba(255,255,255,0.05); padding-top:24px; margin-top:40px; font-size:13px; color:var(--text-muted);">
        <div>&copy; 2026 Morrischem LLC. All rights reserved.</div>
        <div>Registered Office: Georgia. International Business Operations.</div>
      </div>
    </div>
  </footer>
</body>
</html>
