<?php
/*
Template Name: Contact Page
*/
?>
<?php require_once __DIR__ . '/includes/i18n.php'; ?>
<?php $lang_query = $lang === DEFAULT_LANG ? '' : '?lang=' . rawurlencode($lang); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requiredFields = [
        'full_name' => 'Full name',
        'company' => 'Company',
        'email' => 'Email',
        'engineering_focus' => 'Engineering focus',
        'requirements' => 'Requirements'
    ];

    $values = [];
    $errors = [];

    foreach ($requiredFields as $field => $label) {
        $value = isset($_POST[$field]) ? trim($_POST[$field]) : '';
        if ($field === 'email') {
            if ($value === '' || !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $errors[] = $label . ' is required and must be a valid email address.';
            }
        } elseif ($value === '') {
            $errors[] = $label . ' is required.';
        }

        $values[$field] = $value;
    }

    $values['request_type'] = isset($_POST['request_type']) ? trim($_POST['request_type']) : '';
    $values['product_name'] = isset($_POST['product_name']) ? trim($_POST['product_name']) : '';

    if (empty($errors)) {
        $sanitized = [];
        foreach ($values as $key => $value) {
            $sanitized[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }

        $displayValues = [];
        foreach ($sanitized as $key => $value) {
            $displayValues[$key] = html_entity_decode($value, ENT_QUOTES, 'UTF-8');
        }

        $subject = 'New technical inquiry from ' . $displayValues['full_name'];
        $body = "New technical inquiry received via Morrischem contact form\n\n";
        $body .= "Full Name: {$displayValues['full_name']}\n";
        $body .= "Company: {$displayValues['company']}\n";
        $body .= "Email: {$displayValues['email']}\n";
        $body .= "Request Type: " . ($displayValues['request_type'] !== '' ? $displayValues['request_type'] : 'Not specified') . "\n";
        $body .= "Product Name: " . ($displayValues['product_name'] !== '' ? $displayValues['product_name'] : 'Not specified') . "\n";
        $body .= "Engineering Focus: {$displayValues['engineering_focus']}\n";
        $body .= "Requirements:\n{$displayValues['requirements']}\n";

        $headers = [
            'From: no-reply@morrischem.com',
            'Reply-To: ' . $displayValues['email'],
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];

        $mailSent = mail('info@morrischem.com', $subject, $body, implode("\r\n", $headers));

        if ($mailSent) {
          $successParams = ['status' => 'success'];
          if ($lang !== DEFAULT_LANG) {
            $successParams['lang'] = $lang;
          }
          header('Location: contact.php?' . http_build_query($successParams));
            exit;
        }

        $errorParams = ['status' => 'error', 'message' => 'Unable to send message right now. Please try again later.'];
        if ($lang !== DEFAULT_LANG) {
          $errorParams['lang'] = $lang;
        }
        header('Location: contact.php?' . http_build_query($errorParams));
        exit;
    }

    $message = urlencode(implode(' ', $errors));
      $errorParams = ['status' => 'error', 'message' => $message];
      if ($lang !== DEFAULT_LANG) {
        $errorParams['lang'] = $lang;
      }
      header('Location: contact.php?' . http_build_query($errorParams));
    exit;
}
?><!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>" dir="<?php echo htmlspecialchars($dir, ENT_QUOTES, 'UTF-8'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars(__t('contact_page.meta_title', 'common')); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style-guide.css">
  <style>
    body { background-color: #060B18; color: #FFFFFF; }
    .page-header { padding: 120px 0 60px; border-bottom: 1px solid rgba(255,255,255,0.08); background-color: #0B132B; }
    .container { max-width: 1320px; margin: 0 auto; padding: 0 32px; }
    .section-padding { padding: 80px 0; }
    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; }
    .kicker { font-size: 12px; font-weight: 600; color: #00D2FF; letter-spacing: 0.25em; text-transform: uppercase; margin-bottom: 16px; }
    .form-group { margin-bottom: 24px; }
    .form-group label { display: block; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; color: #FFFFFF; margin-bottom: 8px; }
    .form-control { width: 100%; background-color: #060B18; border: 1px solid rgba(255,255,255,0.08); border-radius: 2px; padding: 14px 18px; color: #FFFFFF; font-family: Inter, sans-serif; font-size: 15px; }
    .form-control:focus { outline: none; border-color: #00D2FF; }
    .back-link { color: #00D2FF; text-decoration: none; font-size: 13px; font-weight: 600; display: inline-block; margin-bottom: 24px; }
    .back-link:hover { text-decoration: underline; }
    .footer-wrapper { background-color: #03060D; padding: 60px 0 40px; }
    .alert { margin-bottom: 24px; padding: 12px 16px; border-radius: 2px; font-size: 14px; }
    .alert-success { background-color: rgba(0, 210, 255, 0.1); color: #FFFFFF; border: 1px solid rgba(0, 210, 255, 0.25); }
    .alert-error { background-color: rgba(255, 87, 87, 0.14); color: #FFFFFF; border: 1px solid rgba(255, 87, 87, 0.25); }
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

  <header class="page-header">
    <div class="container">
      <a href="<?php echo htmlspecialchars('/' . $lang_query, ENT_QUOTES, 'UTF-8'); ?>" class="back-link">&larr; <?php echo htmlspecialchars(__t('contact_page.back_link', 'common')); ?></a>
      <div class="kicker"><?php echo htmlspecialchars(__t('contact_page.kicker', 'common')); ?></div>
      <h1><?php echo htmlspecialchars(__t('contact_page.h1', 'common')); ?></h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;"><?php echo htmlspecialchars(__t('contact_page.intro', 'common')); ?></p>
    </div>
  </header>

  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker"><?php echo htmlspecialchars(__t('contact_page.support_kicker', 'common')); ?></div>
        <h2><?php echo htmlspecialchars(__t('contact_page.support_h2', 'common')); ?></h2>
        <p style="margin: 16px 0 32px 0;"><?php echo htmlspecialchars(__t('contact_page.support_body', 'common')); ?></p>
        <div class="card-surface" style="margin-bottom: 24px; background-color: #1C2541; border: 1px solid rgba(255,255,255,0.08); border-radius: 6px; padding: 32px;">
          <h4 style="color: #00D2FF; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;"><?php echo htmlspecialchars(__t('contact_page.commitment_title', 'common')); ?></h4>
          <p style="font-size: 14px; color: #8D99AE;"><?php echo htmlspecialchars(__t('contact_page.commitment_body', 'common')); ?></p>
        </div>
      </div>

      <div class="card-surface" style="background-color: #1C2541; border: 1px solid rgba(255,255,255,0.08); border-radius: 6px; padding: 32px;">
        <?php $status = isset($_GET['status']) ? $_GET['status'] : ''; if ($status === 'success') { echo '<div class="alert alert-success">' . htmlspecialchars(__t('contact_page.success_message', 'common')) . '</div>'; } elseif ($status === 'error') { echo '<div class="alert alert-error">' . htmlspecialchars(__t('contact_page.error_message', 'common')) . '</div>'; } ?>
        <form id="contact-form" action="<?php echo htmlspecialchars('contact.php' . $lang_query, ENT_QUOTES, 'UTF-8'); ?>" method="post">
          <div class="form-group">
            <label for="full_name"><?php echo htmlspecialchars(__t('contact_page.label_full_name', 'common')); ?></label>
            <input type="text" id="full_name" name="full_name" class="form-control" placeholder="<?php echo htmlspecialchars(__t('contact_page.placeholder_full_name', 'common')); ?>" required>
          </div>
          <div class="form-group">
            <label for="company"><?php echo htmlspecialchars(__t('contact_page.label_company', 'common')); ?></label>
            <input type="text" id="company" name="company" class="form-control" placeholder="<?php echo htmlspecialchars(__t('contact_page.placeholder_company', 'common')); ?>" required>
          </div>
          <div class="form-group">
            <label for="email"><?php echo htmlspecialchars(__t('contact_page.label_email', 'common')); ?></label>
            <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo htmlspecialchars(__t('contact_page.placeholder_email', 'common')); ?>" required>
          </div>
          <div class="form-group">
            <label for="request_type"><?php echo htmlspecialchars(__t('contact_page.label_request_type', 'common')); ?></label>
            <select id="request_type" name="request_type" class="form-control">
              <option value=""><?php echo htmlspecialchars(__t('contact_page.option_select_document', 'common')); ?></option>
              <option value="TDS"><?php echo htmlspecialchars(__t('contact_page.option_tds', 'common')); ?></option>
              <option value="SDS"><?php echo htmlspecialchars(__t('contact_page.option_sds', 'common')); ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="product_name"><?php echo htmlspecialchars(__t('contact_page.label_product_name', 'common')); ?></label>
            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="<?php echo htmlspecialchars(__t('contact_page.placeholder_product_name', 'common')); ?>">
          </div>
          <div class="form-group">
            <label for="engineering_focus"><?php echo htmlspecialchars(__t('contact_page.label_engineering_focus', 'common')); ?></label>
            <select id="engineering_focus" name="engineering_focus" class="form-control" required>
              <option value="" disabled selected><?php echo htmlspecialchars(__t('contact_page.option_select_process', 'common')); ?></option>
              <option value="Molecular Sieves & Adsorbents"><?php echo htmlspecialchars(__t('contact_page.option_molecular_sieves', 'common')); ?></option>
              <option value="Water Treatment Chemistries"><?php echo htmlspecialchars(__t('contact_page.option_water_treatment', 'common')); ?></option>
              <option value="Catalysts & Process Tech"><?php echo htmlspecialchars(__t('contact_page.option_catalysts', 'common')); ?></option>
              <option value="Other Specialty Chemical Inquiry"><?php echo htmlspecialchars(__t('contact_page.option_other', 'common')); ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="requirements"><?php echo htmlspecialchars(__t('contact_page.label_requirements', 'common')); ?></label>
            <textarea id="requirements" name="requirements" class="form-control" rows="5" placeholder="<?php echo htmlspecialchars(__t('contact_page.placeholder_requirements', 'common')); ?>" required></textarea>
          </div>
          <button type="submit" class="btn-primary" style="width: 100%; text-align: center; cursor: pointer; border: none;"><?php echo htmlspecialchars(__t('contact_page.submit_button', 'common')); ?></button>
        </form>
      </div>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: #FFFFFF;"><?php echo htmlspecialchars(__t('footer.name', 'common')); ?></div>
      <p style="font-size: 13px; margin-top: 8px; color: #8D99AE;">&copy; 2026 <?php echo htmlspecialchars(__t('footer.name', 'common')); ?>. <?php echo htmlspecialchars(__t('contact_page.footer_rights', 'common')); ?></p>
    </div>
  </footer>

  <script>
    const alertSuccessText = <?php echo json_encode(__t('contact_page.success_message', 'common')); ?>;
    const alertErrorText = <?php echo json_encode(__t('contact_page.error_message', 'common')); ?>;
    const formAction = <?php echo json_encode('contact.php' . $lang_query); ?>;
    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');
    if (status === 'success') {
      alert(alertSuccessText);
    } else if (status === 'error') {
      alert(alertErrorText);
    }

    document.getElementById('contact-form').addEventListener('submit', function (event) {
      event.preventDefault();

      const form = event.currentTarget;
      const formData = new FormData(form);

      fetch(formAction, {
        method: 'POST',
        body: formData
      })
        .then(function (response) {
          return response.text();
        })
        .then(function () {
          const alertBox = document.createElement('div');
          alertBox.className = 'alert alert-success';
          alertBox.textContent = alertSuccessText;

          const formWrapper = form.parentNode;
          formWrapper.insertBefore(alertBox, form);
          form.reset();
        })
        .catch(function () {
          const alertBox = document.createElement('div');
          alertBox.className = 'alert alert-error';
          alertBox.textContent = alertErrorText;

          const formWrapper = form.parentNode;
          formWrapper.insertBefore(alertBox, form);
        });
    });
  </script>
</body>
</html>
