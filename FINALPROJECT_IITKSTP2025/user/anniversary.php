<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Anniversary-Florify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <style>
    body {
        background-color: #f5f6fa;
        font-family: 'Segoe UI', sans-serif;
    }
    .product_card {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: transform 0.2s ease;
        height: 100%;
    }
    .product_card:hover {
        transform: translateY(-5px);
    }
    .product_card img {
        width: 100%;
        max-height: 200px;
        object-fit: contain;
        margin-bottom: 15px;
    }
    .product_title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }
    .product_price {
        font-size: 16px;
        color: #6a1b9a;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .catalog-header {
        text-align: center;
        font-size: 32px;
        font-weight: 600;
        margin: 30px 0 20px;
        color: #2e2e2e;
    }
    .product_text {
        margin-bottom: 30px;
    }
    .banner_alignment img {
        width: 100%;
        height: auto;
        margin-bottom: 30px;
        border-radius: 12px;
    }
</style>
</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php include_once("header.php"); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 banner_alignment">
            <img src="images/anniversary_banner.avif" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2 class="catalog-header">Anniversary</h2>
        </div>
    </div>

    <?php
        $con= mysqli_connect("localhost","root","","florifydb");
        $qry= "select * from products where product_type='Anniversary'";
        $result = mysqli_query($con, $qry);
        $cnt = 0;
        while($row = mysqli_fetch_array($result)){
            if($cnt == 0){
                echo "<div class='row'>";
            }

            echo "<div class='col-sm-3 product_text'>";
            echo "<div class='product_card'>";
            echo "<a id='product' href='destination.php?pid=$row[0]'>";
            echo "<img src='$row[4]' alt=''>";
            echo "<div class='product_title'>$row[1]</div>";
            echo "<div class='product_price'>&#8377; $row[2]</div>";
            echo "</a>";
            echo "</div>";
            echo "</div>";

            $cnt++;

            if($cnt == 4){
                echo "</div>";
                $cnt = 0;
            }
        }
        mysqli_close($con);
    ?>


</body>
<footer class= "footer_backgorund">
    <?php
    include_once("footer.php");
    ?>
</footer>
</html>