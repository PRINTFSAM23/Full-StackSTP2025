<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-FAQ-Florify</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #fff7f1;
    }

    .banner_alignment {
      text-align: center;
      margin: 40px 0 30px;
    }

    .banner_alignment h1 {
      font-weight: bold;
      font-size: 36px;
      margin-bottom: 10px;
      color: #d63384;
    }

    .banner_alignment h5 {
      font-weight: 400;
      color: #666;
    }

    .faq-section {
      padding: 20px 40px;
    }

    .faq-item {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease;
    }

    .faq-item:hover {
      transform: scale(1.01);
    }

    .faq-question {
      font-weight: bold;
      color: #333;
      font-size: 18px;
    }

    .faq-answer {
      color: #555;
      margin-top: 10px;
    }

    .footer_backgorund {
      margin-top: 40px;
      background-color: #f8f8f8;
      padding-top: 20px;
      border-top: 1px solid #e0e0e0;
    }

    .container-fluid {
      padding: 0 30px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <?php include_once("header.php"); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 banner_alignment">
        <h1>Still blooming with questions?</h1>
        <h5>Don’t worry — we’re here to help your doubts wilt away.</h5>
      </div>
    </div>

    <div class="row faq-section">
      <div class="col-sm-12">

        <div class="faq-item">
          <div class="faq-question">🌸 How long does delivery take?</div>
          <div class="faq-answer">Most of our deliveries are completed within 2-3 business days depending on the location.</div>
        </div>

        <div class="faq-item">
          <div class="faq-question">🎁 Can I add a personalized note with the flowers?</div>
          <div class="faq-answer">Yes! You can add a personalized message during checkout, and we’ll make sure it’s included with your bouquet.</div>
        </div>

        <div class="faq-item">
          <div class="faq-question">🚚 Do you offer same-day delivery?</div>
          <div class="faq-answer">Currently, we offer same-day delivery for select cities. You’ll see the option during checkout if it's available in your area.</div>
        </div>

        <div class="faq-item">
          <div class="faq-question">💳 What payment methods are accepted?</div>
          <div class="faq-answer">We accept credit/debit cards, UPI, net banking, and popular wallets like Paytm and Google Pay.</div>
        </div>

        <div class="faq-item">
          <div class="faq-question">📦 Can I cancel or change my order?</div>
          <div class="faq-answer">Yes, changes and cancellations are allowed up to 24 hours before the scheduled delivery time.</div>
        </div>

      </div>
    </div>
  </div>

  <footer class="footer_backgorund">
    <?php include_once("footer.php"); ?>
  </footer>
</body>
</html>
