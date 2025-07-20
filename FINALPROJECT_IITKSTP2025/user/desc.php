<?php
session_start();

if (!isset($_GET['pid']) || !is_numeric($_GET['pid'])) {
    die("Invalid Product ID.");
}

$pid = (int)$_GET['pid'];
$con = mysqli_connect("localhost", "root", "", "florifydb");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$qry = "SELECT * FROM products WHERE product_id = $pid";
$result = mysqli_query($con, $qry);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Product not found.");
}

$row = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="css\stylesheet1.css">

</head>
<body style="margin-bottom: 0%;padding-bottom: 0%; background-color: #fff7f1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include_once("header.php");
                ?>
            </div>
        </div>
        <div class="box1">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $row[4]; ?>" width="100%" height="400px" />
                </div>
                <div class="col-sm-8">
                    <div class="row"><div class="col-sm-12">
                        <label><?php echo $row[1]; ?></label>
                    </div></div>
                    <div class="row"><div class="col-sm-12">
                        <label>Price : <?php echo $row[2]; ?></label>
                    </div></div>
                    <div class="row"><div class="col-sm-12">
                        <h3>Desicription</h3>
                        <p><?php echo $row[3]; ?></p>
                    </div></div>
                    <div class="row"><div class="col-sm-12">
                        <a class='btn btn-success' href="mycart.php?pid=<?php echo $row[0]; ?>">Add To Cart</a>
                    </div></div>
                </div>
            </div>
        </div>


        <footer class= "footer_backgorund">
            <?php
            include_once("footer.php");
            ?>
        </footer>
</div>
</body>
</html>