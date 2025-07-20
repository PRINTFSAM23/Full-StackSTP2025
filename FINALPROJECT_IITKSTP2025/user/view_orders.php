<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:log_reg.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Birthday-Florify</title>
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
        <div class="row">
            <div class="col-sm-12 banner_alignment" style="background-color: #fff7f1">
                <h1>Your vase is empty… let’s bloom it up! 🌷</h1>
                <h3>
                    You haven’t placed any orders yet — the perfect bouquet is just a click away.
                    <br>Start shopping and bring some floral joy to your space!
                </h3>
                <form action="index.php" method="post"><input type="submit" value="Home" name="loginBtn" class="btn-default loginbtn"></form>
            </div>
        </div>
</div>
</body>
<footer class= "footer_backgorund">
    <?php
    include_once("footer.php");
    ?>
</footer>
</html>