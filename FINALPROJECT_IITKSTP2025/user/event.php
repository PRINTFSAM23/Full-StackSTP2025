<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Business Events-Florify</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #fff7f1;
    }

    .banner_alignment img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 30px;
    }

    .product_text {
      text-align: center;
      margin-bottom: 30px;
    }

    #product img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 15px;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    #product img:hover {
      transform: scale(1.05);
    }

    #product {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    #product:hover {
      color: #d63384;
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

    .catalog-header {
      text-align: center;
      font-weight: bold;
      font-size: 28px;
      margin-bottom: 30px;
      color: #333;
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
        <img src="images/buisness_banner.jpeg" alt="Business Events Banner">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <h2 class="catalog-header">Events</h2>
      </div>
    </div>

    <?php
      $con = mysqli_connect("localhost", "root", "", "florifydb");
      $qry = "SELECT * FROM products WHERE product_type='Events'";
      $result = mysqli_query($con, $qry);
      $cnt = 0;

      while($row = mysqli_fetch_array($result)) {
        if($cnt == 0) {
          echo "<div class='row'>";
        }

        echo "<div class='col-sm-3 product_text'>";
        echo "<a id='product' href='destination.php?pid=$row[0]'>";
        echo "<img src='$row[4]' alt='Event Product Image'>";
        echo "<div class='row'><div class='col-sm-12' style='margin-top:10px;'>$row[1]</div></div>";
        echo "<div class='row'><div class='col-sm-12'>&#8377; $row[2]</div></div>";
        echo "</a>";
        echo "</div>";

        $cnt++;
        if($cnt == 4) {
          echo "</div>";
          $cnt = 0;
        }
      }

      if ($cnt != 0) {
        echo "</div>";
      }

      mysqli_close($con);
    ?>
  </div>

  <footer class="footer_backgorund">
    <?php include_once("footer.php"); ?>
  </footer>
</body>
</html>
