<?php
/*
Template Name: Molecular Sieves Page
*/
?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<?php $lang_query = $lang === DEFAULT_LANG ? '' : '?lang=' . rawurlencode($lang); ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Morrischem supplies synthetic zeolite molecular sieves including 3A, 4A, 5A, and 13X adsorbent media for dehydration, gas processing, and purification applications.">
  <link rel="canonical" href="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/molecular-sieves.html">
  <meta property="og:title" content="Synthetic Zeolite Molecular Sieves & Adsorbents — Morrischem LLC">
  <meta property="og:description" content="Industrial-grade molecular sieves and adsorbent media for natural gas drying, dehydration, and gas processing buyers seeking reliable performance.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.morrischem.com/wp-content/themes/morrischem-industrial-clean/molecular-sieves.html">
  <title>Molecular Sieves & Adsorbents — Morrischem LLC</title>
  
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
<div style="position: fixed; top: 16px; right: 16px; z-index: 999;">
  <form action="" method="GET" style="margin:0;">
    <select name="lang" onchange="this.form.submit()" style="padding: 6px 10px; border-radius: 4px; border: 1px solid #ccc; font-weight: bold; cursor: pointer;">
      <?php
      global $allowed_langs, $lang;

      $lang_names = [
          "en" => "EN",
          "es" => "ES",
          "fr" => "FR",
          "de" => "DE",
          "ru" => "RU",
          "tr" => "TR",
          "uk" => "UK",
          "ar" => "AR",
          "az" => "AZ"
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

  <!-- Header Banner -->
  <header class="page-header">
    <div class="container">

      <a href="<?php echo htmlspecialchars('/' . $lang_query, ENT_QUOTES, 'UTF-8'); ?>" class="back-link">&larr; <?php echo __t('contact_page.back_link', 'common'); ?></a>

      <div class="kicker">
        <?php echo htmlspecialchars(__t('molecular.kicker', 'products', 'Capability Vertical 01')); ?>
      </div>

      <h1>
        <?php echo __t('molecular.title', 'products'); ?>
      </h1>

      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">
        <?php echo __t('molecular.subtitle', 'products'); ?>
      </p>

    </div>
</header>

  <!-- Technical Overview -->
  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker">Process Physics</div>
        <h2>Pore Size Precision &amp; Selectivity</h2>
        <p style="margin-top: 16px;">
          Molecular sieves utilize precise crystalline pore structures to adsorb molecules based on kinetic diameter and polarity. Selecting the proper pore size (3A, 4A, 5A, or 13X) prevents co-adsorption of hydrocarbons while maximizing water capacity.
        </p>

        <div class="compliance-box">
        <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">
          <?php echo htmlspecialchars(__t('molecular.compliance_title', 'products', 'Quality Assurance & Compliance')); ?>
        </h4>
        <p style="font-size: 14px; margin-bottom: 0;">
          <?php echo htmlspecialchars(__t('molecular.compliance_text', 'products', 'All supplied adsorbent media comply with strict international quality standards, meeting ISO 9001 manufacturing traceability and EU REACH compliance requirements for industrial chemical handling.')) ; ?>
        </p>
        </div>
      </div>

      <div class="card-surface">
        <h3 style="margin-bottom: 16px;">
          <?php echo htmlspecialchars(__t('molecular.grades_title', 'products', 'Core Adsorbent Grades')); ?>
        </h3>
        <ul style="list-style: none; color: var(--text-muted); font-size: 15px; line-height: 2;">
          <li>• <strong><?php echo htmlspecialchars(__t('molecular.grades.3a_title', 'products', 'Type 3A')); ?>:</strong> <?php echo htmlspecialchars(__t('molecular.grades.list_3a', 'products', 'Cracked gas, ethanol, and unsaturated hydrocarbon dehydration.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular.grades.4a_title', 'products', 'Type 4A')); ?>:</strong> <?php echo htmlspecialchars(__t('molecular.grades.list_4a', 'products', 'Natural gas dehydration, air drying, and refrigerant loops.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular.grades.5a_title', 'products', 'Type 5A')); ?>:</strong> <?php echo htmlspecialchars(__t('molecular.grades.list_5a', 'products', 'Iso/normal paraffin separation and natural gas sweetening.')); ?></li>
          <li>• <strong><?php echo htmlspecialchars(__t('molecular.grades.13x_title', 'products', 'Type 13X')); ?>:</strong> <?php echo htmlspecialchars(__t('molecular.grades.list_13x', 'products', 'APG sweetening, CO2 removal from air feeds, and H2S/mercaptan traps.')); ?></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Technical Specification Downloads -->
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="kicker"><?php echo htmlspecialchars(__t('sections.technical_documentation', 'common', 'Technical Documentation')); ?></div>
      <h2><?php echo htmlspecialchars(__t('sections.engineered_grade_specifications', 'common', 'Engineered Grade Specifications')); ?></h2>
      <p style="max-width: 640px; margin-bottom: 32px;">
        Review technical parameters and operational guidelines for standard adsorbent media inventory.
      </p>

      <div class="grid-3">
        <div class="spec-card">
          <div>
            <div style="font-size: 11px; color: var(--accent-cyan); font-weight: 600; text-transform: uppercase;">
              <?php echo htmlspecialchars(__t('molecular.grades.3a_label', 'products', 'Grade 3A / Dehydration')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('molecular.grades.3a_title', 'products', '3A Zeolite Spheres')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('molecular.grades.3a_desc', 'products', 'Pore Size: ~3 Å. Optimized for selective water uptake without unsaturated hydrocarbon co-adsorption.')); ?>
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
              <?php echo htmlspecialchars(__t('molecular.grades.4a_label', 'products', 'Grade 4A / Gas Processing')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('molecular.grades.4a_title', 'products', '4A Zeolite Extrudates')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('molecular.grades.4a_desc', 'products', 'Pore Size: ~4 Å. Standard choice for static and dynamic natural gas drying beds.')); ?>
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
              <?php echo htmlspecialchars(__t('molecular.grades.13x_label', 'products', 'Grade 13X / Purification')); ?>
            </div>
            <h3 style="margin: 8px 0;">
              <?php echo htmlspecialchars(__t('molecular.grades.13x_title', 'products', '13X High Capacity')); ?>
            </h3>
            <p style="font-size: 13px; margin-bottom: 16px;">
              <?php echo htmlspecialchars(__t('molecular.grades.13x_desc', 'products', 'Pore Size: ~10 Å. High surface area for deep CO2, H2S, and sulfur compound removal.')); ?>
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
      <div class="kicker"><?php echo htmlspecialchars(__t('molecular.support_kicker', 'products', 'Engineering Support')); ?></div>
      <h2><?php echo htmlspecialchars(__t('molecular.bed_title', 'products', 'Request Bed Sizing & Design Analysis')); ?></h2>
      <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('molecular.bed_desc', 'products', 'Submit your gas flow rate, inlet pressure, temperature, and target dew point for custom bed volume calculation.')); ?></p>
      <a href="/contact/?subject=Consultation" class="btn-primary"><?php echo htmlspecialchars(__t('molecular.cta_inquire', 'products', 'Inquire with Engineering Team')); ?></a>
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
