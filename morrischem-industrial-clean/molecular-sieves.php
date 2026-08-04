<?php if (function_exists('add_action') === false) { require_once __DIR__ . '/wp-stubs.php'; } ?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars(__t('molecular_sieves.meta_description', 'common', 'Morrischem supplies synthetic zeolite molecular sieves including 3A, 4A, 5A, and 13X adsorbent media for dehydration, gas processing, and purification applications.'), ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/molecular-sieves.php">
  <meta property="og:title" content="<?php echo htmlspecialchars(__t('molecular_sieves.og_title', 'common', 'Synthetic Zeolite Molecular Sieves & Adsorbents — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(__t('molecular_sieves.og_description', 'common', 'Industrial-grade molecular sieves and adsorbent media for natural gas drying, dehydration, and gas processing buyers seeking reliable performance.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/molecular-sieves.php">
  <title><?php echo htmlspecialchars(__t('molecular_sieves.title', 'common', 'Molecular Sieves & Adsorbents — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
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
<?php echo render_language_selector(); ?>
  <header class="page-header">
    <div class="container">
      <a href="index.php" class="back-link">&larr; <?php echo htmlspecialchars(__t('molecular_sieves.back_link', 'common', 'Back to Main Flagship'), ENT_QUOTES, 'UTF-8'); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('molecular_sieves.kicker', 'common', 'Capability Vertical 01'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h1><?php echo htmlspecialchars(__t('molecular_sieves.heading', 'common', 'Molecular Sieves & Adsorbent Media'), ENT_QUOTES, 'UTF-8'); ?></h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        <?php echo htmlspecialchars(__t('molecular_sieves.intro', 'common', 'Synthetic zeolites, activated aluminas, and silica gels engineered for deep dehydration, mercaptan removal, and gas stream purification.'), ENT_QUOTES, 'UTF-8'); ?>
      </p>
    </div>
  </header>
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker"><?php echo htmlspecialchars(__t('molecular_sieves.physics_kicker', 'common', 'Process Physics'), ENT_QUOTES, 'UTF-8'); ?></div>
        <h2><?php echo htmlspecialchars(__t('molecular_sieves.physics_title', 'common', 'Pore Size Precision & Selectivity'), ENT_QUOTES, 'UTF-8'); ?></h2>
        <p style="margin-top: 16px;">
          <?php echo htmlspecialchars(__t('molecular_sieves.physics_body', 'common', 'Molecular sieves utilize precise crystalline pore structures to adsorb molecules based on kinetic diameter and polarity. Selecting the proper pore size (3A, 4A, 5A, or 13X) prevents co-adsorption of hydrocarbons while maximizing water capacity.'), ENT_QUOTES, 'UTF-8'); ?>
        </p>
        <div class="compliance-box">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('molecular_sieves.compliance_title', 'common', 'Quality Assurance & Compliance'), ENT_QUOTES, 'UTF-8'); ?></h4>
          <p style="font-size: 14px; margin-bottom: 0;"><?php echo htmlspecialchars(__t('molecular_sieves.compliance_body', 'common', 'All supplied adsorbent media comply with strict international quality standards, meeting ISO 9001 manufacturing traceability and EU REACH compliance requirements for industrial chemical handling.'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </div>
      <div class="card-surface">
        <h3 style="margin-bottom: 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.core_grades_title', 'common', 'Core Adsorbent Grades'), ENT_QUOTES, 'UTF-8'); ?></h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong><?php echo htmlspecialchars(__t('molecular_sieves.grade_3a_label', 'common', 'Type 3A:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('molecular_sieves.grade_3a_body', 'common', 'Cracked gas, ethanol, and unsaturated hydrocarbon dehydration.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular_sieves.grade_4a_label', 'common', 'Type 4A:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('molecular_sieves.grade_4a_body', 'common', 'Natural gas dehydration, air drying, and refrigerant loops.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular_sieves.grade_5a_label', 'common', 'Type 5A:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('molecular_sieves.grade_5a_body', 'common', 'Iso/normal paraffin separation and natural gas sweetening.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular_sieves.grade_13x_label', 'common', 'Type 13X:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('molecular_sieves.grade_13x_body', 'common', 'APG sweetening, CO2 removal from air feeds, and H2S/mercaptan traps.'), ENT_QUOTES, 'UTF-8'); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('molecular_sieves.docs_kicker', 'common', 'Technical Documentation'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('molecular_sieves.docs_title', 'common', 'Engineered Grade Specifications'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="max-width: 640px; margin-bottom: 32px;"><?php echo htmlspecialchars(__t('molecular_sieves.docs_body', 'common', 'Review technical parameters and operational guidelines for standard adsorbent media inventory.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_3a_heading', 'common', 'Grade 3A / Dehydration'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_3a_name', 'common', '3A Zeolite Spheres'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_3a_details', 'common', 'Pore Size: ~3 Å. Optimized for selective water uptake without unsaturated hydrocarbon co-adsorption.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=3A%20Zeolite%20Spheres" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=3A%20Zeolite%20Spheres" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_4a_heading', 'common', 'Grade 4A / Gas Processing'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_4a_name', 'common', '4A Zeolite Extrudates'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_4a_details', 'common', 'Pore Size: ~4 Å. Standard choice for static and dynamic natural gas drying beds.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=4A%20Zeolite%20Extrudates" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=4A%20Zeolite%20Extrudates" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_13x_heading', 'common', 'Grade 13X / Purification'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_13x_name', 'common', '13X High Capacity'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.grade_13x_details', 'common', 'Pore Size: ~10 Å. High surface area for deep CO2, H2S, and sulfur compound removal.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=13X%20High%20Capacity" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=13X%20High%20Capacity" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('molecular_sieves.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding" style="text-align: center;">
    <div class="container" style="max-width: 700px;">
      <div class="kicker"><?php echo htmlspecialchars(__t('molecular_sieves.cta_kicker', 'common', 'Engineering Support'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('molecular_sieves.cta_title', 'common', 'Request Bed Sizing & Design Analysis'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('molecular_sieves.cta_body', 'common', 'Submit your gas flow rate, inlet pressure, temperature, and target dew point for custom bed volume calculation.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <a href="contact.php" class="btn-primary"><?php echo htmlspecialchars(__t('molecular_sieves.cta_action', 'common', 'Inquire with Engineering Team'), ENT_QUOTES, 'UTF-8'); ?></a>
    </div>
  </section>
  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: var(--text-main);"><?php echo htmlspecialchars(__t('footer.name', 'common', 'MORRISCHEM LLC'), ENT_QUOTES, 'UTF-8'); ?></div>
      <p style="font-size: 13px; margin-top: 8px;"><?php echo htmlspecialchars(__t('footer.rights', 'common', '&copy; 2026 Morrischem LLC. All rights reserved.'), ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
  </footer>
</body>
</html>
