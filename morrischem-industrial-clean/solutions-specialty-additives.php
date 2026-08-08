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
  <meta name="description" content="<?php echo htmlspecialchars(__t('specialty_page.meta_description', 'common', 'Advanced specialty surfactant and polymer systems for industrial coatings, DTM adhesion, sustainable low-VOC formulation, and high-durability performance design.')); ?>">
  <title><?php echo htmlspecialchars(__t('specialty_page.meta_title', 'common', 'Advanced Surfactant and Polymer Systems — Morrischem LLC')); ?></title>

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
      <a href="/<?php echo $lang_query; ?>" class="back-link">&larr; <?php echo htmlspecialchars(__t('specialty_page.back_link', 'common', 'Back to Main Flagship')); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.kicker', 'common', 'Specialty Solutions Vertical')); ?></div>
      <h1 style="margin-bottom: 14px;"><?php echo htmlspecialchars(__t('specialty_page.h1', 'common', 'Advanced Surfactant and Polymer Systems')); ?></h1>
      <p style="max-width: 820px; font-size: 18px;"><?php echo htmlspecialchars(__t('specialty_page.subtitle', 'common', 'High-Performance Functional Monomers, Reactive Emulsifiers, and PFAS-Free Specialty Additives')); ?></p>
    </div>
  </header>

  <section class="section-padding section-emphasis">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.section_a.kicker', 'common', 'Section A')); ?></div>
        <h3><?php echo htmlspecialchars(__t('specialty_page.section_a.title', 'common', 'Specialty Functional Monomers')); ?></h3>
        <p><?php echo htmlspecialchars(__t('specialty_page.section_a.body', 'common', 'Direct-to-Metal adhesion promoters engineered for C1-C4 corrosivity classes, wet-adhesion retention, and high-PVC scrub endurance where mechanical durability and anti-corrosion persistence must coexist.')); ?></p>
      </article>
      <article class="spec-card">
        <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.section_b.kicker', 'common', 'Section B')); ?></div>
        <h3><?php echo htmlspecialchars(__t('specialty_page.section_b.title', 'common', 'Reactive and Polymerizable Surfactants')); ?></h3>
        <p><?php echo htmlspecialchars(__t('specialty_page.section_b.body', 'common', 'Zero-leaching emulsifier systems, including ether sulfate and phosphate ester chemistries, designed to covalently integrate into polymer backbones and reduce water whitening under severe humidity cycles.')); ?></p>
      </article>
    </div>
  </section>

  <section class="section-padding">
    <div class="container grid-2">
      <article class="spec-card">
        <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.section_c.kicker', 'common', 'Section C')); ?></div>
        <h3><?php echo htmlspecialchars(__t('specialty_page.section_c.title', 'common', 'Sustainable Green Solvents and Coalescents')); ?></h3>
        <p><?php echo htmlspecialchars(__t('specialty_page.section_c.body', 'common', 'Low-VOC, bio-based dibasic ester solvent systems and coalescing aids supporting replacement pathways for NMP and DMF while preserving film formation, workability, and process throughput.')); ?></p>
      </article>
      <article class="spec-card">
        <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.section_d.kicker', 'common', 'Section D')); ?></div>
        <h3><?php echo htmlspecialchars(__t('specialty_page.section_d.title', 'common', 'Performance Additives and Defoamers')); ?></h3>
        <p><?php echo htmlspecialchars(__t('specialty_page.section_d.body', 'common', 'PFAS-free hot-block resistance additives, bio-based defoamer technologies, and open-time extenders calibrated for premium finish quality, anti-foam persistence, and robust line performance.')); ?></p>
      </article>
    </div>
  </section>

  <section class="section-padding section-emphasis">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.section_e.kicker', 'common', 'Section E')); ?></div>
      <h2 style="margin-bottom: 20px;"><?php echo htmlspecialchars(__t('specialty_page.section_e.title', 'common', 'Application Matrix')); ?></h2>
      <div class="application-table-wrap">
        <table class="application-table" aria-label="<?php echo htmlspecialchars(__t('specialty_page.section_e.aria_label', 'common', 'Specialty Additives Application Matrix')); ?>">
          <thead>
            <tr>
              <th><?php echo htmlspecialchars(__t('specialty_page.section_e.table_headers.application', 'common', 'Application')); ?></th>
              <th><?php echo htmlspecialchars(__t('specialty_page.section_e.table_headers.chemistry', 'common', 'Primary Chemistry Direction')); ?></th>
              <th><?php echo htmlspecialchars(__t('specialty_page.section_e.table_headers.target', 'common', 'Performance Target')); ?></th>
              <th><?php echo htmlspecialchars(__t('specialty_page.section_e.table_headers.notes', 'common', 'Technical Notes')); ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.maintenance.application', 'common', 'Industrial Maintenance')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.maintenance.chemistry', 'common', 'DTM monomer + PFAS-free additive stack')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.maintenance.target', 'common', 'Corrosion protection, adhesion retention')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.maintenance.notes', 'common', 'Designed for harsh cyclic humidity and contact environment.')); ?></td>
            </tr>
            <tr>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.psa.application', 'common', 'Pressure-Sensitive Adhesives (PSA)')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.psa.chemistry', 'common', 'Reactive surfactant system')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.psa.target', 'common', 'Lower migration, stable tack profile')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.psa.notes', 'common', 'Backbone-bonding emulsifier strategy for durability.')); ?></td>
            </tr>
            <tr>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.automotive.application', 'common', 'Automotive DTM')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.automotive.chemistry', 'common', 'Adhesion promoter + coalescent tuning')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.automotive.target', 'common', 'Wet adhesion and chip resistance')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.automotive.notes', 'common', 'Supports high durability under thermal and chemical stress.')); ?></td>
            </tr>
            <tr>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.architectural.application', 'common', 'Architectural Coatings')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.architectural.chemistry', 'common', 'Low-VOC green solvent + open-time extender')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.architectural.target', 'common', 'Application window and finish quality')); ?></td>
              <td><?php echo htmlspecialchars(__t('specialty_page.section_e.rows.architectural.notes', 'common', 'Optimizes flow, leveling, and sustained coating integrity.')); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-padding" id="contact">
    <div class="container cta-block">
      <div class="kicker"><?php echo htmlspecialchars(__t('specialty_page.cta.kicker', 'common', 'Technical Data Request')); ?></div>
      <h2><?php echo htmlspecialchars(__t('specialty_page.cta.title', 'common', 'Request TDS and Formulation Guidance')); ?></h2>
      <p><?php echo htmlspecialchars(__t('specialty_page.cta.body', 'common', 'Share your substrate type, binder family, corrosion class target, and VOC constraints for a focused technical recommendation and document package.')); ?></p>
      <div class="cta-actions">
        <a href="/contact/?subject=TDS%20Request" class="btn-primary"><?php echo htmlspecialchars(__t('specialty_page.cta.primary', 'common', 'Request TDS')); ?></a>
        <a href="/contact/?subject=Specialty%20Additives%20Consultation" class="btn-secondary"><?php echo htmlspecialchars(__t('specialty_page.cta.secondary', 'common', 'Consult a Specialist')); ?></a>
      </div>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 24px; color: var(--text-main);"><?php echo htmlspecialchars(__t('footer.name', 'common', 'MORRISCHEM LLC')); ?></div>
      <p style="font-size: 14px; margin-top: 8px;"><?php echo htmlspecialchars(__t('footer.tagline', 'common', 'Engineering Industrial Performance.')); ?></p>
      <div style="display:flex; justify-content:space-between; align-items:center; border-top:1px solid rgba(255,255,255,0.05); padding-top:24px; margin-top:40px; font-size:13px; color:var(--text-muted);">
        <div>&copy; 2026 Morrischem LLC. <?php echo htmlspecialchars(__t('footer.rights', 'common', 'All rights reserved.')); ?></div>
        <div><?php echo htmlspecialchars(__t('footer.office', 'common', 'Registered Office: Georgia. International Business Operations.')); ?></div>
      </div>
    </div>
  </footer>
</body>
</html>
