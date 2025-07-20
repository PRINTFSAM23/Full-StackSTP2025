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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart - Florify</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f5f5f5;
    }

    .card-style {
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      border: 1px solid #e3e3e3;
      background: white;
      padding: 40px;
      max-width: 1000px;
      margin: 50px auto;
    }

    .loginbtn {
      background-color: #28a745;
      color: white;
      padding: 10px 30px;
      font-weight: 500;
      border-radius: 10px;
      border: none;
    }

    .loginbtn:hover {
      background-color: #218838;
    }

    .empty-cart-img {
      max-width: 100%;
      height: auto;
    }

    .cart-message h1 {
      font-size: 28px;
      font-weight: 600;
      line-height: 1.6;
      color: #444;
    }

    footer.footer_backgorund {
      margin-top: 60px;
      padding-top: 20px;
    }
  </style>
</head>
<body>

<?php include_once("header.php"); ?>

<div class="container">
  <div class="card-style">
    <div class="row">

      <div class="col-md-5 text-center">
        <img src="images/empty_cart.svg" alt="Empty Cart" class="empty-cart-img">
      </div>

      <div class="col-md-7 cart-message text-center">
        <h1>Hmm.....<br>Your Cart looks empty<br>Let's bloom it!!!!!</h1>
        <br><br>
        <form action="index.php" method="post">
          <input type="submit" value="Home" name="loginBtn" class="loginbtn">
        </form>
      </div>

    </div>
  </div>
</div>

<footer class="footer_backgorund">
  <?php include_once("footer.php"); ?>
</footer>

</body>
</html>
