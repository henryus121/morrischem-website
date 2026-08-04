<?php if (function_exists('add_action') === false) { require_once __DIR__ . '/wp-stubs.php'; } ?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars(__t('catalysts.meta_description', 'common', 'Morrischem delivers hydroprocessing catalysts, guard bed media, and inert ceramic support media for refinery, petrochemical, and industrial process applications.'), ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/catalysts-process-tech.php">
  <meta property="og:title" content="<?php echo htmlspecialchars(__t('catalysts.og_title', 'common', 'Hydroprocessing Catalysts & Support Media — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(__t('catalysts.og_description', 'common', 'High-performance hydroprocessing catalysts and support media for B2B industrial buyers in refining, hydrogen, and petrochemical operations.'), ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/catalysts-process-tech.php">
  <title><?php echo htmlspecialchars(__t('catalysts.title', 'common', 'Catalysts & Process Tech — Morrischem LLC'), ENT_QUOTES, 'UTF-8'); ?></title>
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
      <a href="index.php" class="back-link">&larr; <?php echo htmlspecialchars(__t('catalysts.back_link', 'common', 'Back to Main Flagship'), ENT_QUOTES, 'UTF-8'); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('catalysts.kicker', 'common', 'Capability Vertical 03'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h1><?php echo htmlspecialchars(__t('catalysts.heading', 'common', 'Catalysts & Process Technologies'), ENT_QUOTES, 'UTF-8'); ?></h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        <?php echo htmlspecialchars(__t('catalysts.intro', 'common', 'High-activity catalyst systems, support media, and guard beds engineered to maximize unit yield, selectivity, and run length across hydroprocessing and chemical synthesis units.'), ENT_QUOTES, 'UTF-8'); ?>
      </p>
    </div>
  </header>
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker"><?php echo htmlspecialchars(__t('catalysts.physics_kicker', 'common', 'Reaction Kinetics'), ENT_QUOTES, 'UTF-8'); ?></div>
        <h2><?php echo htmlspecialchars(__t('catalysts.physics_title', 'common', 'Primary Industrial Applications'), ENT_QUOTES, 'UTF-8'); ?></h2>
        <p style="margin-top: 16px;">
          <?php echo htmlspecialchars(__t('catalysts.physics_body', 'common', 'Optimizing catalytic reaction pathways requires precise matching of metal loading, pore size distribution, and acid-site density to process operating conditions.'), ENT_QUOTES, 'UTF-8'); ?>
        </p>
        <div class="compliance-box">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('catalysts.compliance_title', 'common', 'Traceability & Safety Compliance'), ENT_QUOTES, 'UTF-8'); ?></h4>
          <p style="font-size: 14px; margin-bottom: 0;"><?php echo htmlspecialchars(__t('catalysts.compliance_body', 'common', 'Manufactured under strict ISO quality systems with complete metal lot traceability, safe handling protocols, and comprehensive documentation aligned with global chemical compliance regulations.'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </div>
      <div class="card-surface">
        <h3 style="margin-bottom: 16px;"><?php echo htmlspecialchars(__t('catalysts.applications_title', 'common', 'Target Applications'), ENT_QUOTES, 'UTF-8'); ?></h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong><?php echo htmlspecialchars(__t('catalysts.app_target1_label', 'common', 'Hydrotreating & Hydrodesulfurization:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('catalysts.app_target1_body', 'common', 'Deep sulfur and nitrogen removal (ULSD feed preparation).'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('catalysts.app_target2_label', 'common', 'Guard Beds & Contaminant Traps:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('catalysts.app_target2_body', 'common', 'Demetallization and particulate filtering upstream of main catalyst beds.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('catalysts.app_target3_label', 'common', 'Hydrogen Production & Syngas:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('catalysts.app_target3_body', 'common', 'Shift catalysts and reforming support media.'), ENT_QUOTES, 'UTF-8'); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('catalysts.app_target4_label', 'common', 'Petrochemical Synthesis:'), ENT_QUOTES, 'UTF-8'); ?></strong> <?php echo htmlspecialchars(__t('catalysts.app_target4_body', 'common', 'Selective hydrogenation and oxidation catalyst media.'), ENT_QUOTES, 'UTF-8'); ?></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('catalysts.docs_kicker', 'common', 'Technical Documentation'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('catalysts.docs_title', 'common', 'Catalyst & Support Media Specifications'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="max-width: 640px; margin-bottom: 32px;"><?php echo htmlspecialchars(__t('catalysts.docs_body', 'common', 'Access specification matrices and operating parameters for active catalyst systems and ceramic bed support media.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('catalysts.grade_1_heading', 'common', 'Hydrotreating'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('catalysts.grade_1_name', 'common', 'CoMo / NiMo Hydroprocessing'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('catalysts.grade_1_details', 'common', 'High-activity alumina-supported catalysts engineered for deep HDS/HDN feed processing.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=CoMo%20%2F%20NiMo%20Hydroprocessing" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=CoMo%20%2F%20NiMo%20Hydroprocessing" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('catalysts.grade_2_heading', 'common', 'Guard Beds'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('catalysts.grade_2_name', 'common', 'Contaminant & Metal Traps'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('catalysts.grade_2_details', 'common', 'Macroporous alumina guard media for arsenic, silica, and iron removal upstream of main reactors.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=Contaminant%20%26%20Metal%20Traps" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=Contaminant%20%26%20Metal%20Traps" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;"><?php echo htmlspecialchars(__t('catalysts.grade_3_heading', 'common', 'Bed Support'), ENT_QUOTES, 'UTF-8'); ?></div>
            <h3 style="margin: 8px 0;"><?php echo htmlspecialchars(__t('catalysts.grade_3_name', 'common', 'Inert Ceramic Media Spheres'), ENT_QUOTES, 'UTF-8'); ?></h3>
            <p style="font-size: 13px; margin-bottom: 16px;"><?php echo htmlspecialchars(__t('catalysts.grade_3_details', 'common', 'High-purity, thermal-shock resistant support balls designed for uniform flow distribution.'), ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="contact.php?doc=TDS&product=Inert%20Ceramic%20Media%20Spheres" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_tds', 'common', 'Request TDS'), ENT_QUOTES, 'UTF-8'); ?></a>
            <a href="contact.php?doc=SDS&product=Inert%20Ceramic%20Media%20Spheres" class="btn-secondary" style="flex: 1; text-align: center; font-size: 11px; padding: 10px 16px;"><?php echo htmlspecialchars(__t('catalysts.request_sds', 'common', 'Request SDS'), ENT_QUOTES, 'UTF-8'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding" style="text-align: center;">
    <div class="container" style="max-width: 700px;">
      <div class="kicker"><?php echo htmlspecialchars(__t('catalysts.cta_kicker', 'common', 'Technical Consultation'), ENT_QUOTES, 'UTF-8'); ?></div>
      <h2><?php echo htmlspecialchars(__t('catalysts.cta_title', 'common', 'Evaluate Your Catalyst Bed Cycle'), ENT_QUOTES, 'UTF-8'); ?></h2>
      <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('catalysts.cta_body', 'common', 'Our specialists review feed characterization, space velocity, and temperature profiles to optimize bed performance.'), ENT_QUOTES, 'UTF-8'); ?></p>
      <a href="contact.php" class="btn-primary"><?php echo htmlspecialchars(__t('catalysts.cta_action', 'common', 'Request Catalyst Evaluation'), ENT_QUOTES, 'UTF-8'); ?></a>
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
