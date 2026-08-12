<?php if (function_exists("add_action") === false) { require_once __DIR__ . "/wp-stubs.php"; } ?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars(__t('meta.title', 'common', 'Morrischem LLC — Engineering Industrial Performance')); ?></title>
  
  <!-- Technical SEO and Open Graph Metadata -->
  <meta name="description" content="<?php echo htmlspecialchars(__t('meta.description', 'common', 'Morrischem supplies high-performance molecular sieves, process catalysts, and industrial water treatment chemistries for global energy and refinery operations.')); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars(__t('meta.og_title', 'common', 'Morrischem LLC — Critical Infrastructure. Uncompromising Precision.')); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars(__t('meta.og_description', 'common', 'Engineering solutions for critical industrial processes, refining, and gas processing.')); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://morrischem.com">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/includes/refinery_imge.png?v=3.0">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  
  <!-- Master Design System CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-guide.css">
  
  <style>
    /* Hero Header with Custom Image */
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
      background-image: linear-gradient(180deg, rgba(15, 23, 42, 0.25) 0%, rgba(15, 23, 42, 0.5) 100%), 
            url('<?php echo get_template_directory_uri(); ?>/includes/refinery_imge.png?v=3.0');
      background-size: cover;
      background-position: center;
    }

    .hero-content {
      max-width: 900px;
      z-index: 10;
    }

    .hero-kicker {
      font-size: 12px;
      font-weight: 600;
      color: var(--accent-cyan);
      letter-spacing: 0.25em;
      text-transform: uppercase;
      margin-bottom: 24px;
      background: none;
      border: 0;
      border-radius: 0;
      box-shadow: none;
      padding: 0;
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

    #plant-map .plant-map__grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 24px;
      align-items: stretch;
    }

    #plant-map .plant-map__card {
      height: 100%;
    }

    #solutions .core-divisions-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 24px;
      align-items: stretch;
    }

    @media screen and (max-width: 1199px) {
      #plant-map .plant-map__grid,
      #solutions .core-divisions-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media screen and (max-width: 767px) {
      #plant-map .plant-map__grid,
      #solutions .core-divisions-grid {
        grid-template-columns: 1fr;
      }
    }

    .section-kicker {
      font-size: 12px;
      font-weight: 600;
      color: var(--accent-cyan);
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
      background: linear-gradient(180deg, var(--accent-cyan) 0%, rgba(0, 210, 255, 0.1) 100%);
      border-radius: 1px;
    }

    .footer-wrapper {
      background-color: #03060D;
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


  <!-- Act I: Hero Viewport -->
  <header class="hero-viewport">
    <div class="hero-content">
      <div class="hero-kicker"><?php echo htmlspecialchars(__t('hero.kicker', 'common', 'Global Industrial Process Solutions')); ?></div>
      <h1 class="hero-title"><?php echo htmlspecialchars(__t('hero.title', 'common', 'One Partner. Unlimited Technical Capability.')); ?></h1>
      <p class="hero-subtitle"><?php echo htmlspecialchars(__t('hero.subtitle', 'common', 'Engineering Solutions for Critical Industrial Processes.')); ?></p>
      <div class="hero-cta-group">
        <a href="/contact/?subject=Inquiry" class="btn-primary"><?php echo htmlspecialchars(__t('hero.cta_primary', 'common', 'Discuss Your Requirements')); ?></a>
        <a href="#solutions" class="btn-secondary"><?php echo htmlspecialchars(__t('hero.cta_secondary', 'common', 'Explore Solutions')); ?></a>
      </div>
    </div>
  </header>

  <!-- Act II: Operational Focus -->
  <section class="section-padding" style="background-color: var(--bg-dark-secondary);">
    <div class="container grid-2">
      <div class="card-surface" style="height: 350px; display: flex; align-items: center; justify-content: center; background-image: url('<?php echo get_template_directory_uri(); ?>/includes/refinery_imge.png?v=3.0'); background-size: cover; background-position: center;">
      </div>
      <div class="conduit-border">
        <div class="section-kicker"><?php echo htmlspecialchars(__t('focus.kicker', 'common', 'Operational Focus')); ?></div>
        <h2 class="section-title"><?php echo htmlspecialchars(__t('focus.title', 'common', 'Built Around Your Process.')); ?></h2>
        <p style="margin-bottom: 32px;">
          <?php echo htmlspecialchars(__t('focus.body', 'common', 'Every refinery, gas plant, and industrial facility operates under distinct thermal, chemical, and pressure parameters. Reliable performance begins with selecting technology engineered for your specific operating environment.')); ?>
        </p>
        <div class="card-surface">
          <h4 style="color: var(--accent-cyan); font-size: 13px; text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('focus.approach_title', 'common', 'The Morrischem Approach')); ?></h4>
          <p style="font-size: 14px;"><?php echo htmlspecialchars(__t('focus.approach_body', 'common', 'We evaluate operating conditions first, then align and source precise molecular sieves, catalysts, water treatment chemistries, and performance additives.')); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Act III: Interactive Plant Map -->
  <section class="section-padding" id="plant-map" data-controller="plant-map" data-map-scope="process-units">
    <div class="container">
      <div class="section-kicker"><?php echo htmlspecialchars(__t('plant_map.kicker', 'common', 'Interactive Plant Map')); ?></div>
      <h2 class="section-title"><?php echo htmlspecialchars(__t('plant_map.title', 'common', 'Inside an Industrial Process')); ?></h2>
      <p style="max-width: 600px; margin-bottom: 48px;"><?php echo htmlspecialchars(__t('plant_map.body', 'common', 'Explore how specialized chemistries and adsorbent media integrate across critical operating units.')); ?></p>
      
      <div class="grid-3 plant-map__grid" data-map-group="unit-cards">
        <div class="card-surface plant-map__card plant-map__card--unit-01" data-map-node="unit-01" data-map-target="gas-dehydration-train" data-map-title-key="plant_map.unit1_title">
          <div class="plant-map__unit-label" style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('plant_map.unit1_label', 'common', 'Unit: Gas Dehydration Train')); ?></div>
          <h3 class="plant-map__unit-title"><?php echo htmlspecialchars(__t('plant_map.unit1_title', 'common', 'Molecular Sieves')); ?></h3>
          <p class="plant-map__unit-description" style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('plant_map.unit1_body', 'common', 'Deep moisture removal down to < 0.1 ppmv to prevent hydrate formation in cryogenic exchangers.')); ?></p>
        </div>
        <div class="card-surface plant-map__card plant-map__card--unit-02" data-map-node="unit-02" data-map-target="cooling-tower-loop" data-map-title-key="plant_map.unit2_title">
          <div class="plant-map__unit-label" style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('plant_map.unit2_label', 'common', 'Unit: Cooling Tower Loop')); ?></div>
          <h3 class="plant-map__unit-title"><?php echo htmlspecialchars(__t('plant_map.unit2_title', 'common', 'Water Treatment Chemicals')); ?></h3>
          <p class="plant-map__unit-description" style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('plant_map.unit2_body', 'common', 'Advanced scale, corrosion, and biological control formulations to maintain optimal heat transfer efficiency.')); ?></p>
        </div>
        <div class="card-surface plant-map__card plant-map__card--unit-03" data-map-node="unit-03" data-map-target="hydrotreating-reactor" data-map-title-key="plant_map.unit3_title">
          <div class="plant-map__unit-label" style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('plant_map.unit3_label', 'common', 'Unit: Hydrotreating Reactor')); ?></div>
          <h3 class="plant-map__unit-title"><?php echo htmlspecialchars(__t('plant_map.unit3_title', 'common', 'Catalysts and Guard Beds')); ?></h3>
          <p class="plant-map__unit-description" style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('plant_map.unit3_body', 'common', 'High-activity catalyst media and contaminant traps designed for maximum cycle length.')); ?></p>
        </div>
        <div class="card-surface plant-map__card plant-map__card--unit-04" data-map-node="unit-04" data-map-target="specialty-additives-system" data-map-title-key="plant_map.unit4_title">
          <div class="plant-map__unit-label" style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('plant_map.unit4_label', 'common', 'Unit: Performance Coatings Train')); ?></div>
          <h3 class="plant-map__unit-title"><?php echo htmlspecialchars(__t('plant_map.unit4_title', 'common', 'Advanced Surfactant and Polymer Systems')); ?></h3>
          <p class="plant-map__unit-description" style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('plant_map.unit4_body', 'common', 'Reactive surfactant and polymer additive chemistries for enhanced adhesion, wet durability, and long-cycle coating protection.')); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Act IV: Core Divisions (Harmonized Paths) -->
  <section class="section-padding" id="solutions" style="background-color: var(--bg-dark-secondary);">
    <div class="container">
      <div class="section-kicker"><?php echo htmlspecialchars(__t('divisions.kicker', 'common', 'Core Divisions')); ?></div>
      <h2 class="section-title"><?php echo htmlspecialchars(__t('divisions.title', 'common', 'Industrial Capabilities')); ?></h2>

      <?php
      $template_dir = function_exists('get_template_directory') ? get_template_directory() : __DIR__;
      $template_uri = function_exists('get_template_directory_uri') ? get_template_directory_uri() : '';

      $division_img_v1_rel = '/assets/images/divisions/molecular-sieves-adsorbents.webp';
      $division_img_v2_rel = '/assets/images/divisions/water-treatment-chemicals.webp';
      $division_img_v3_rel = '/assets/images/divisions/catalyst-process-tech.webp';
      $division_img_v4_rel = '/assets/images/solutions/specialty-additives.webp';

      $industry_adsorption_image_exists = file_exists($template_dir . $division_img_v1_rel);
      $industry_water_treatment_image_exists = file_exists($template_dir . $division_img_v2_rel);
      $industry_catalysts_image_exists = file_exists($template_dir . $division_img_v3_rel);
      $industry_specialty_image_exists = file_exists($template_dir . $division_img_v4_rel);
      ?>
      
      <div class="grid-4 core-divisions-grid">
        <div class="card-surface">
          <div class="solutions-card-media<?php echo $industry_adsorption_image_exists ? '' : ' is-missing'; ?>">
            <?php if ($industry_adsorption_image_exists) : ?>
              <img class="solutions-card-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/divisions/molecular-sieves-adsorbents.webp" alt="" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
          <div class="solutions-card-content">
            <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('divisions.v1_label', 'common', '01 / ADSORPTION')); ?></div>
            <h3><?php echo htmlspecialchars(__t('divisions.v1_title', 'common', 'Molecular Sieves and Adsorbents')); ?></h3>
            <p style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('divisions.v1_body', 'common', 'Synthetic zeolites and activated aluminas for gas dehydration, LNG processing, and purification.')); ?></p>
            <a href="/molecular-sieves/" style="display: inline-block; margin-top: 16px; color: var(--accent-cyan); text-decoration: none; font-size: 14px; font-weight: 600;"><?php echo htmlspecialchars(__t('divisions.v1_link', 'common', 'Explore Adsorbents')); ?></a>
          </div>
        </div>

        <div class="card-surface">
          <div class="solutions-card-media<?php echo $industry_water_treatment_image_exists ? '' : ' is-missing'; ?>">
            <?php if ($industry_water_treatment_image_exists) : ?>
              <img class="solutions-card-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/divisions/water-treatment-chemicals.webp" alt="" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
          <div class="solutions-card-content">
            <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('divisions.v2_label', 'common', '02 / UTILITIES')); ?></div>
            <h3><?php echo htmlspecialchars(__t('divisions.v2_title', 'common', 'Water Treatment Chemicals')); ?></h3>
            <p style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('divisions.v2_body', 'common', 'Scale inhibitors, corrosion control, biocides, and membrane chemistries for industrial cooling.')); ?></p>
            <a href="/water-treatment/" style="display: inline-block; margin-top: 16px; color: var(--accent-cyan); text-decoration: none; font-size: 14px; font-weight: 600;"><?php echo htmlspecialchars(__t('divisions.v2_link', 'common', 'Explore Water Treatment')); ?></a>
          </div>
        </div>

        <div class="card-surface">
          <div class="solutions-card-media<?php echo $industry_catalysts_image_exists ? '' : ' is-missing'; ?>">
            <?php if ($industry_catalysts_image_exists) : ?>
              <img class="solutions-card-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/divisions/catalyst-process-tech.webp" alt="" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
          <div class="solutions-card-content">
            <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('divisions.v3_label', 'common', '03 / REACTION')); ?></div>
            <h3><?php echo htmlspecialchars(__t('divisions.v3_title', 'common', 'Catalysts and Process Tech')); ?></h3>
            <p style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('divisions.v3_body', 'common', 'Refining and synthesis catalysts designed to maximize yield and extend unit cycle lengths.')); ?></p>
            <a href="/catalysts-process-tech/" style="display: inline-block; margin-top: 16px; color: var(--accent-cyan); text-decoration: none; font-size: 14px; font-weight: 600;"><?php echo htmlspecialchars(__t('divisions.v3_link', 'common', 'Explore Catalysts')); ?></a>
          </div>
        </div>
        
        <div class="card-surface">
          <div class="solutions-card-media<?php echo $industry_specialty_image_exists ? '' : ' is-missing'; ?>">
            <?php if ($industry_specialty_image_exists) : ?>
              <img class="solutions-card-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/specialty-additives.webp" alt="" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>
          <div class="solutions-card-content">
            <div style="font-size: 11px; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('divisions.v4_label', 'common', '04 / SPECIALTY ADDITIVES')); ?></div>
            <h3><?php echo htmlspecialchars(__t('divisions.v4_title', 'common', 'Advanced Surfactant and Polymer Systems')); ?></h3>
            <p style="font-size: 14px; margin-top: 12px;"><?php echo htmlspecialchars(__t('divisions.v4_body', 'common', 'High-performance functional monomers, reactive emulsifiers, and PFAS-free additives engineered for direct-to-metal protection, enhanced film adhesion, and extreme-durability industrial coatings.')); ?></p>
            <a href="/solutions-specialty-additives/" style="display: inline-block; margin-top: 16px; color: var(--accent-cyan); text-decoration: none; font-size: 14px; font-weight: 600;"><?php echo htmlspecialchars(__t('divisions.v4_link', 'common', 'Explore Specialty Solutions')); ?></a>
          </div>
        </div>

    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div class="footer-flex">
        <div><?php echo htmlspecialchars(__t('footer.name', 'common', 'MORRISCHEM LLC')); ?></div>
        <div><?php echo htmlspecialchars(__t('footer.rights', 'common', 'All rights reserved.')); ?></div>
      </div>
    </div>
  </footer>
</body>
</html>
