<?php if (function_exists('add_action') === false) { require_once __DIR__ . '/wp-stubs.php'; } ?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars(__t('water_treatment.meta_description', 'common', 'Morrischem supplies industrial water treatment chemicals, ion exchange resins, scale inhibitors, and biocides for cooling, boiler, and membrane systems.'), ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/water-treatment.php">
  <meta property="og:title" content="<?php echo htmlspecialchars(__t('water_treatment.og_title', 'common', 'Industrial Water Treatment Chemicals & Biocides — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(__t('water_treatment.og_description', 'common', 'Reliable water treatment formulations and specialty chemistry for B2B industrial water treatment engineers, plant operators, and procurement teams.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/water-treatment.php">
  <title><?php echo htmlspecialchars(__t('water_treatment.title', 'common', 'Water Treatment Chemistries — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style-guide.css">
  <style>
    .page-header { padding: 120px 0 60px 0; border-bottom: 1px solid var(--border-steel); background-color: var(--bg-dark-secondary); }
    .container { max-width: 1320px; margin: 0 auto; padding: 0 32px; }
    .section-padding { padding: 80px 0; border-bottom: 1px solid var(--border-steel); }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; }
    .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .kicker { font-size: 12px; font-weight: 600; color: var(--accent-cyan); letter-spacing: 0.25em; text-transform: uppercase; margin-bottom: 16px; }
    .back-link { color: var(--accent-cyan); text-decoration: none; font-size: 13px; font-weight: 600; display: inline-block; margin-bottom: 24px; }
    .back-link:hover { text-decoration: underline; }
    .spec-card { background-color: var(--bg-card-surface); border: 1px solid var(--border-steel); border-radius: var(--radius-interactive); padding: 24px; display: flex; flex-direction: column; justify-content: space-between; }
    .compliance-box { background-color: var(--bg-card-surface); border-left: 3px solid var(--accent-cyan); padding: 24px; margin-top: 32px; }
    .footer-wrapper { background-color: #03060D; padding: 60px 0 40px 0; }
  </style>
</head>
<body>
<?php echo render_language_selector(); ?>
  <header class="page-header">
    <div class="container">
      <a href="index.php" class="back-link">&larr; <?php echo htmlspecialchars(__t('water_treatment.back_link', 'common', 'Back to Main Flagship'), ENT_QUOTES, 'UTF-8'); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('water_treatment.kicker', 'common', 'Capability Vertical 02'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h1><?php echo htmlspecialchars(__t('water_treatment.heading', 'common', 'Industrial Water Treatment Chemistries'), ENT_QUOTES, 'UTF-8'); ?></h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        <?php echo htmlspecialchars(__t('water_treatment.intro', 'common', 'Specialized chemical formulations engineered for scale inhibition, corrosion mitigation, and bio-fouling control in heavy utility circuits.'), ENT_QUOTES, 'UTF-8'); ?>
      </p>
    </div>
  </header>
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker"><?php echo htmlspecialchars(__t('water_treatment.physics_kicker', 'common', 'Process Physics'), ENT_QUOTES, 'UTF-8'); ?></div>
        <h2><?php echo htmlspecialchars(__t('water_treatment.physics_title', 'common', 'Primary Industrial Applications'), ENT_QUOTES, 'UTF-8'); ?></h2>
        <p style="margin-top: 16px;">
          <?php echo htmlspecialchars(__t('water_treatment.physics_body', 'common', 'Industrial cooling loops and boiler systems require tailored chemical regimes to prevent thermal efficiency losses, unscheduled downtime, and premature equipment replacement.'), ENT_QUOTES, 'UTF-8'); ?>
        </p>
        <div class="compliance-box">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('water_treatment.compliance_title', 'common', 'Environmental & Regulatory Compliance'), ENT_QUOTES, 'UTF-8'); ?></h4>
          <p style="font-size: 14px; margin-bottom: 0;"><?php echo htmlspecialchars(__t('water_treatment.compliance_body', 'common', 'Formulated in compliance with international environmental guidelines, supporting zero-discharge initiatives, safe biological toxicity thresholds, and EU REACH compliance standards.'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </div>
      <div class="card-surface">
        <h3 style="margin-bottom: 16px;"><?php echo htmlspecialchars(__t('water_treatment.applications_title', 'common', 'Target Applications'), ENT_QUOTES, 'UTF-8'); ?></h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong><?php echo htmlspecialchars(__t('water_treatment.app_target1_label', 'common', 'Cooling Water Circuits:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('water_treatment.app_target1_body', 'common', 'High-efficiency scale and corrosion inhibitors for recirculating towers.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water_treatment.app_target2_label', 'common', 'Boiler Feedwater Treatment:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('water_treatment.app_target2_body', 'common', 'Oxygen scavengers, alkalinity builders, and condensate line protection.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water_treatment.app_target3_label', 'common', 'Membrane Protection:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('water_treatment.app_target3_body', 'common', 'Reverse Osmosis (RO) antiscalants and bio-dispersants.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('water_treatment.app_target4_label', 'common', 'Effluent Clarification:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('water_treatment.app_target4_body', 'common', 'High-molecular-weight coagulants and flocculants for industrial wastewater.'), ENT_QUOTES, 'UTF-8'); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('water_treatment.docs_kicker', 'common', 'Technical Documentation'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('water_treatment.docs_title', 'common', 'Chemical Formulation Matrices'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="max-width: 640px; margin-bottom: 32px;"><?php echo htmlspecialchars(__t('water_treatment.docs_body', 'common', 'Review technical documentation and performance thresholds for core water treatment chemistry formulations.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('water_treatment.grade_1_heading', 'common', 'Cooling Towers'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('water_treatment.grade_1_name', 'common', 'Scale & Corrosion Inhibitors'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('water_treatment.grade_1_details', 'common', 'Phosphonate and organic polymer blends engineered for high-skin-temperature heat exchangers.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=Scale%20%26%20Corrosion%20Inhibitors" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=Scale%20%26%20Corrosion%20Inhibitors" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('water_treatment.grade_2_heading', 'common', 'Boiler Circuits'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('water_treatment.grade_2_name', 'common', 'Oxygen Scavengers & Amines'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('water_treatment.grade_2_details', 'common', 'DEHA and filming amine chemistry combinations for complete condensate system passivation.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=Oxygen%20Scavengers%20%26%20Amines" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=Oxygen%20Scavengers%20%26%20Amines" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('water_treatment.grade_3_heading', 'common', 'Membrane Systems'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('water_treatment.grade_3_name', 'common', 'High-Recovery RO Antiscalants'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('water_treatment.grade_3_details', 'common', 'Broad-spectrum silica and sulfate scale control for reverse osmosis units operating under high recovery rates.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=High-Recovery%20RO%20Antiscalants" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=High-Recovery%20RO%20Antiscalants" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('water_treatment.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding" style="text-align: center;">
    <div class="container" style="max-width: 700px;">
      <div class="kicker"><?php echo htmlspecialchars(__t('water_treatment.cta_kicker', 'common', 'Technical Consultation'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('water_treatment.cta_title', 'common', 'Discuss Your Water Quality Profile'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('water_treatment.cta_body', 'common', 'Our engineering team analyzes water chemistry and system design to specify the optimal treatment regime.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <a href="contact.php" class="btn-primary"><?php echo htmlspecialchars(__t('water_treatment.cta_action', 'common', 'Request Chemical Selection Support'), ENT_QUOTES, 'UTF-8'); ?></a>
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
