<?php
/*
Template Name: Water Treatment Page
*/
?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<?php $lang_query = $lang === DEFAULT_LANG ? '' : '?lang=' . rawurlencode($lang); ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Morrischem supplies industrial water treatment chemicals, ion exchange resins, scale inhibitors, and biocides for cooling, boiler, and membrane systems.">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/water-treatment.html">
  <meta property="og:title" content="Industrial Water Treatment Chemicals & Biocides — Morrischem LLC">
  <meta property="og:description" content="Reliable water treatment formulations and specialty chemistry for B2B industrial water treatment engineers, plant operators, and procurement teams.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/water-treatment.html">
  <title>Water Treatment Chemistries — Morrischem LLC</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
  <link rel="stylesheet" href="style-guide.css">
  
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

    html[dir="rtl"] .product-page {
      text-align: right;
    }
  </style>
</head>
<body class="product-page">
  <!-- Header Banner -->
  <header class="page-header">
    <div class="container">
      <a href="<?php echo htmlspecialchars('/' . $lang_query, ENT_QUOTES, 'UTF-8'); ?>" class="back-link">&larr; <?php echo htmlspecialchars(__t('contact_page.back_link', 'common', 'Back to Main Flagship')); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('water.kicker', 'products', 'Capability Vertical 02')); ?></div>
      <h1><?php echo htmlspecialchars(__t('water.title', 'products', 'Industrial Water Treatment Chemistries')); ?></h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        <?php echo htmlspecialchars(__t('water.subtitle', 'products', 'Specialized chemical formulations engineered for scale inhibition, corrosion mitigation, and bio-fouling control in heavy utility circuits.')) ; ?>
      </p>
    </div>
  </header>

  <!-- Technical Overview & Applications -->
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker"><?php echo htmlspecialchars(__t('water.process_kicker', 'products', 'Process Physics')); ?></div>
        <h2><?php echo htmlspecialchars(__t('water.applications_title', 'products', 'Primary Industrial Applications')); ?></h2>
        <p style="margin-top: 16px;">
          <?php echo htmlspecialchars(__t('water.applications_text', 'products', 'Industrial cooling loops and boiler systems require tailored chemical regimes to prevent thermal efficiency losses, unscheduled downtime, and premature equipment replacement.')); ?>
        </p>

        <div class="compliance-box">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">
            <?php echo htmlspecialchars(__t('water.compliance_title', 'products', 'Environmental & Regulatory Compliance')); ?>
          </h4>
          <p style="font-size: 14px; margin-bottom: 0;">
            <?php echo htmlspecialchars(__t('water.compliance_text', 'products', 'Formulated in compliance with international environmental guidelines, supporting zero-discharge initiatives, safe biological toxicity thresholds, and EU REACH compliance standards.')); ?>
          </p>
        </div>
      </div>

      <div class="card-surface">
        <h3 style="margin-bottom: 16px;"><?php echo htmlspecialchars(__t('sections.target_applications', 'common', 'Target Applications')); ?></h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong><?php echo htmlspecialchars(__t('water.applications.cooling_title', 'products', 'Cooling Water Circuits')); ?>:</strong> <?php echo htmlspecialchars(__t('water.applications.cooling_desc', 'products', 'High-efficiency scale and corrosion inhibitors for recirculating towers.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water.applications.boiler_title', 'products', 'Boiler Feedwater Treatment')); ?>:</strong> <?php echo htmlspecialchars(__t('water.applications.boiler_desc', 'products', 'Oxygen scavengers, alkalinity builders, and condensate line protection.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water.applications.membrane_title', 'products', 'Membrane Protection')); ?>:</strong> <?php echo htmlspecialchars(__t('water.applications.membrane_desc', 'products', 'Reverse Osmosis (RO) antiscalants and bio-dispersants.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water.applications.effluent_title', 'products', 'Effluent Clarification')); ?>:</strong> <?php echo htmlspecialchars(__t('water.applications.effluent_desc', 'products', 'High-molecular-weight coagulants and flocculants for industrial wastewater.')); ?></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Technical Specification Downloads -->
  <section class="section-padding section-emphasis">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('sections.technical_documentation', 'common', 'Technical Documentation')); ?></div>
      <h2><?php echo htmlspecialchars(__t('sections.chemical_formulation_matrices', 'common', 'Chemical Formulation Matrices')); ?></h2>
      <p style="max-width: 640px; margin-bottom: 32px;">
        <?php echo htmlspecialchars(__t('water.documentation_intro', 'products', 'Review technical documentation and performance thresholds for core water treatment chemistry formulations.')); ?>
      </p>

      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">
              <?php echo htmlspecialchars(__t('water.specs.cooling_title', 'products', 'Cooling Towers')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('water.specs.cooling_title', 'products', 'Scale & Corrosion Inhibitors')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('water.specs.cooling_desc', 'products', 'Phosphonate and organic polymer blends engineered for high-skin-temperature heat exchangers.')); ?>
            </p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_tds', 'common', 'Request TDS')); ?>
            </a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_sds', 'common', 'Request SDS')); ?>
            </a>
          </div>
        </div>

        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">
              <?php echo htmlspecialchars(__t('water.specs.boiler_title', 'products', 'Boiler Circuits')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('water.specs.boiler_title', 'products', 'Oxygen Scavengers & Amines')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('water.specs.boiler_desc', 'products', 'DEHA and filming amine chemistry combinations for complete condensate system passivation.')); ?>
            </p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_tds', 'common', 'Request TDS')); ?>
            </a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_sds', 'common', 'Request SDS')); ?>
            </a>
          </div>
        </div>

        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">
              <?php echo htmlspecialchars(__t('water.specs.membrane_title', 'products', 'Membrane Systems')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('water.specs.membrane_title', 'products', 'High-Recovery RO Antiscalants')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('water.specs.membrane_desc', 'products', 'Broad-spectrum silica and sulfate scale control for reverse osmosis units operating under high recovery rates.')); ?>
            </p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/contact/'); ?>?subject=TDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_tds', 'common', 'Request TDS')); ?>
            </a>
            <a href="<?php echo home_url('/contact/'); ?>?subject=SDS-Request" target="_self" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;">
              <?php echo htmlspecialchars(__t('actions.request_sds', 'common', 'Request SDS')); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Gateway -->
  <section class="section-padding" style="text-align: center;">
    <div class="container" style="max-width: 700px;">
      <div class="kicker"><?php echo htmlspecialchars(__t('water.cta_kicker', 'products', 'Technical Consultation')); ?></div>
      <h2><?php echo htmlspecialchars(__t('water.cta_title', 'products', 'Discuss Your Water Quality Profile')); ?></h2>
      <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('water.cta_desc', 'products', 'Our engineering team analyzes water chemistry and system design to specify the optimal treatment regime.')); ?></p>
      <a href="/contact/?subject=Consultation" class="btn-primary"><?php echo htmlspecialchars(__t('water.cta_support', 'products', 'Request Chemical Selection Support')); ?></a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: var(--text-main);"><?php echo htmlspecialchars(__t('footer.name', 'common', 'MORRISCHEM LLC')); ?></div>
      <p style="font-size: 13px; margin-top: 8px;">&copy; 2026 <?php echo htmlspecialchars(__t('footer.name', 'common', 'MORRISCHEM LLC')); ?>. <?php echo htmlspecialchars(__t('footer.rights', 'common', 'All rights reserved.')); ?></p>
    </div>
  </footer>

</body>
</html>
