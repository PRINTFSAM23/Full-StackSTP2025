<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - Florify</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #fff7f1;
      margin: 0;
      padding: 0;
    }

    .card-style {
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      border: 1px solid #e3e3e3;
      background: white;
      padding: 40px;
      max-width: 800px;
      margin: 60px auto;
      text-align: center;
    }

    .card-style h1 {
      font-size: 32px;
      font-weight: 600;
      color: #444;
    }

    .card-style h5 {
      color: #C1C4C5;
      font-size: 16px;
      margin-top: 15px;
    }

    footer.footer_backgorund {
      margin-top: 60px;
      padding-top: 20px;
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

  <div class="card-style">
    <h1>Tell us about your query</h1>
    <h5>Florify values its Customers, connect with us and we will reach out to you in your celebrations</h5>
    <h5>Call Us : 8874370897</h5>
    <h5>Email Us : florify@gmail.com</h5>
  </div>
</div>

<footer class="footer_backgorund">
  <?php include_once("footer.php"); ?>
</footer>

</body>
</html>
