<?php
 session_start();
 if(!isset($_SESSION['uid'])){
     header("location: log_reg.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Florify</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #fff7f1;
            font-family: 'Segoe UI', sans-serif;
        }
        .banner_alignment {
            text-align: center;
            padding: 20px 0;
        }
        .logo_img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
        .confirm-box {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 40px;
            margin: 30px auto;
            max-width: 700px;
            box-shadow: 0 0 25px rgba(0,0,0,0.08);
            text-align: center;
        }
        .confirm-box h1 {
            color: #d63384;
            font-weight: 600;
            margin-bottom: 25px;
        }
        .confirm-box h3 {
            font-weight: 400;
            font-size: 20px;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        .confirm-box h5 {
            font-size: 16px;
            color: #444;
        }
        .confirm-box a {
            color: #007bff;
            font-weight: bold;
        }
        .confirm-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 banner_alignment">
            <img src="images/logo.png" alt="Florify Logo" class="logo_img">
        </div>
    </div>

    <div class="confirm-box">
        <h1>Thank you, [Customer Name]! 🌸</h1>
        <h3>
            Your order #12345 has been confirmed.
            <br>We're handpicking your blooms and getting them ready to ship.
            <br>🌼 Estimated delivery: [Date]
            <br>You'll receive a tracking link soon.
            <br>If you have any questions, we’re just a petal away!
        </h3>
        <h5>
            Looking for something more? 🌷<br>
            Explore our full collection — there’s always something blooming just for you!<br>
            <a href="index.php">Click this link to find the petals you want</a>
        </h5>
    </div>
</div>

</body>
</html>
