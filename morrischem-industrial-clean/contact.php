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

        $subject = 'New technical inquiry from ' . $sanitized['full_name'];
        $body = "New technical inquiry received via Morrischem contact form\n\n";
        $body .= "Full Name: {$sanitized['full_name']}\n";
        $body .= "Company: {$sanitized['company']}\n";
        $body .= "Email: {$sanitized['email']}\n";
        $body .= "Request Type: " . ($sanitized['request_type'] !== '' ? $sanitized['request_type'] : 'Not specified') . "\n";
        $body .= "Product Name: " . ($sanitized['product_name'] !== '' ? $sanitized['product_name'] : 'Not specified') . "\n";
        $body .= "Engineering Focus: {$sanitized['engineering_focus']}\n";
        $body .= "Requirements:\n{$sanitized['requirements']}\n";

        $headers = [
            'From: no-reply@morrischem.com',
            'Reply-To: ' . $sanitized['email'],
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];

        $mailSent = mail('info@morrischem.com', $subject, $body, implode("\r\n", $headers));

        if ($mailSent) {
            header('Location: contact.php?status=success');
            exit;
        }

        header('Location: contact.php?status=error&message=' . urlencode('Unable to send message right now. Please try again later.'));
        exit;
    }

    $message = urlencode(implode(' ', $errors));
    header('Location: contact.php?status=error&message=' . $message);
    exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technical Inquiry &amp; Consultation — Morrischem LLC</title>
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
  <header class="page-header">
    <div class="container">
      <a href="/" class="back-link">&larr; Back to Main Flagship</a>
      <div class="kicker">Consultation Gateway</div>
      <h1>Engineering Technical Inquiry</h1>
      <p style="font-size: 18px; max-width: 720px; margin-top: 16px;">Submit your process stream parameters or chemical specifications directly to our technical team for evaluation.</p>
    </div>
  </header>

  <section class="section-padding">
    <div class="container grid-2">
      <div>
        <div class="kicker">Direct Response Protocol</div>
        <h2>Engineering Support</h2>
        <p style="margin: 16px 0 32px 0;">We evaluate operating conditions, feed compositions, and pressure profiles before recommending adsorbent media, catalyst configurations, or water treatment regimes.</p>
        <div class="card-surface" style="margin-bottom: 24px; background-color: #1C2541; border: 1px solid rgba(255,255,255,0.08); border-radius: 6px; padding: 32px;">
          <h4 style="color: #00D2FF; font-size: 13px; text-transform: uppercase; margin-bottom: 8px;">Response Commitment</h4>
          <p style="font-size: 14px; color: #8D99AE;">All inquiries receive a preliminary engineering assessment within 24 business hours.</p>
        </div>
      </div>

      <div class="card-surface" style="background-color: #1C2541; border: 1px solid rgba(255,255,255,0.08); border-radius: 6px; padding: 32px;">
        <?php $status = isset($_GET['status']) ? $_GET['status'] : ''; $message = isset($_GET['message']) ? htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8') : ''; if ($status === 'success') { echo '<div class="alert alert-success">Thank you. Your inquiry has been submitted successfully.</div>'; } elseif ($status === 'error') { echo '<div class="alert alert-error">' . $message . '</div>'; } ?>
        <form id="contact-form" action="contact.php" method="post">
          <div class="form-group">
            <label for="full_name">Full Name / Title</label>
            <input type="text" id="full_name" name="full_name" class="form-control" placeholder="e.g. John Doe, Lead Process Engineer" required>
          </div>
          <div class="form-group">
            <label for="company">Company / Operating Facility</label>
            <input type="text" id="company" name="company" class="form-control" placeholder="e.g. Petrochemical Refinery Complex" required>
          </div>
          <div class="form-group">
            <label for="email">Corporate Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="name@company.com" required>
          </div>
          <div class="form-group">
            <label for="request_type">Request Type</label>
            <select id="request_type" name="request_type" class="form-control">
              <option value="">Select document request...</option>
              <option value="TDS">TDS Request</option>
              <option value="SDS">SDS Request</option>
            </select>
          </div>
          <div class="form-group">
            <label for="product_name">Product / Specification Name</label>
            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="e.g. 3A Zeolite Spheres">
          </div>
          <div class="form-group">
            <label for="engineering_focus">Primary Engineering Focus</label>
            <select id="engineering_focus" name="engineering_focus" class="form-control" required>
              <option value="" disabled selected>Select process area...</option>
              <option value="Molecular Sieves & Adsorbents">Molecular Sieves &amp; Adsorbents</option>
              <option value="Water Treatment Chemistries">Water Treatment Chemistries</option>
              <option value="Catalysts & Process Tech">Catalysts &amp; Process Tech</option>
              <option value="Other Specialty Chemical Inquiry">Other Specialty Chemical Inquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label for="requirements">Technical Requirements / Stream Parameters</label>
            <textarea id="requirements" name="requirements" class="form-control" rows="5" placeholder="Specify operating temperatures, flow rates, contaminants, or targeted product specs..." required></textarea>
          </div>
          <button type="submit" class="btn-primary" style="width: 100%; text-align: center; cursor: pointer; border: none;">Submit Inquiry</button>
        </form>
      </div>
    </div>
  </section>

  <footer class="footer-wrapper">
    <div class="container">
      <div style="font-family: var(--font-serif); font-size: 20px; color: #FFFFFF;">MORRISCHEM LLC</div>
      <p style="font-size: 13px; margin-top: 8px; color: #8D99AE;">&copy; 2026 Morrischem LLC. All rights reserved.</p>
    </div>
  </footer>

  <script>
    const params = new URLSearchParams(window.location.search);
    const status = params.get('status');
    const message = params.get('message');
    if (status === 'success') {
      alert('Thank you. Your inquiry has been submitted successfully.');
    } else if (status === 'error' && message) {
      alert(decodeURIComponent(message));
    }

    document.getElementById('contact-form').addEventListener('submit', function (event) {
      event.preventDefault();

      const form = event.currentTarget;
      const formData = new FormData(form);

      fetch('contact.php', {
        method: 'POST',
        body: formData
      })
        .then(function (response) {
          return response.text();
        })
        .then(function () {
          const alertBox = document.createElement('div');
          alertBox.className = 'alert alert-success';
          alertBox.textContent = 'Thank you. Your technical inquiry has been transmitted successfully.';

          const formWrapper = form.parentNode;
          formWrapper.insertBefore(alertBox, form);
          form.reset();
        })
        .catch(function () {
          const alertBox = document.createElement('div');
          alertBox.className = 'alert alert-error';
          alertBox.textContent = 'Unable to submit your inquiry right now. Please try again later.';

          const formWrapper = form.parentNode;
          formWrapper.insertBefore(alertBox, form);
        });
    });
  </script>
</body>
</html>
