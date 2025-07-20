<?php
session_start();

if (!isset($_GET['pid']) || empty($_GET['pid'])) {
    echo "<h3 style='color:red; text-align:center; margin-top: 50px;'>Error: Product ID not provided.</h3>";
    exit(); 
}

$pid = intval($_GET['pid']);
$con = mysqli_connect("localhost", "root", "", "florifydb");


if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$qry = "SELECT * FROM products WHERE product_id = $pid";
$result = mysqli_query($con, $qry);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<h3 style='color:red; text-align:center; margin-top: 50px;'>Product not found!</h3>";
    exit(); 
}

$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home-Birthday-Florify</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #fff7f1;
      margin: 0;
      padding: 0;
    }

    .product-container {
      margin: 50px auto;
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      padding: 40px;
      max-width: 1000px;
    }

    .product-container img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      max-height: 500px;
      object-fit: cover;
    }

    .product-container label {
      font-size: 18px;
      font-weight: 500;
      display: block;
      margin: 15px 0 10px;
    }

    .product-container h1 {
      font-size: 24px;
      font-weight: bold;
      color: #444;
    }

    .product-container h5 {
      color: #666;
      font-size: 16px;
    }

    .btn-success {
      margin-top: 20px;
      font-size: 16px;
      padding: 10px 30px;
      border-radius: 10px;
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

    <div class="row" style="height:100px">
      <div class="col-sm-12"></div>
    </div>

    <div class="product-container row">
      <div class="col-sm-6">
        <img src="<?php echo htmlspecialchars($row[4]); ?>" alt="Product Image">
      </div>
      <div class="col-sm-6">
        <label><?php echo htmlspecialchars($row[1]); ?></label>
        <label>Price: ₹<?php echo htmlspecialchars($row[2]); ?></label>
        <label><h1>Description</h1></label>
        <label><h5><?php echo htmlspecialchars($row[3]); ?></h5></label>
        <label><input type="button" class="btn btn-success" value="Submit"></label>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 footer_backgorund">
        <?php include_once("footer.php"); ?>
      </div>
    </div>
  </div>
</body>
</html>
