<?php
    session_start();
    $msg="";
    if(!isset($_SESSION['uid'])){
        header("location:log_reg.php");
    }
    if(isset($_POST['btnorder'])){
        $name = $_POST['txtname'];
        $no = $_POST['txtno'];
        $add = $_POST['txtaddress'];
        $pin = $_POST['txtpincode'];
        $mode = $_POST['paymode'];
        $address = "$name<br>$add<br>Pincode : $pin<br>Phone No : $no";
        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into orders(user_id,product_id,address,order_amount,payment_mode,order_status) values($_SESSION[uid],'$_COOKIE[cart]','$address',$_SESSION[total],'$mode','Pending')";
        mysqli_query($con, $qry);
        if(mysqli_affected_rows($con)>0)
            header("location:order_confirm.php");
        else
            $msg = "<font color='red'>Error in placing the order. try Again !!!!</font>";
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\stylesheet1.css">
</head>
<body>
    <div class='conatiner-fluid'>
        <?php  include 'header.php'; ?>
        <div class='row banner_alignment'>
            <div class='col-sm-4'></div>
            <div class='col-sm-4 '>
                <h2>Shipping Details</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="txtname" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="number" name="txtno" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="txtaddress" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="number" name="txtpincode" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Payment Mode</label>
                        <select name="paymode" class="form-control">
                            <option>Select Payment Mode</option>
                            <option>Cash On delivery</option>
                            <option>Online Mode</option>
                        </select>
                    </div>
                    <?php echo $msg; ?>
                    <input type="submit" name="btnorder" value="Order" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class='col-sm-4'></div>
        </div>
        <?php  include 'footer.php'; ?>
    </div>
</body>
</html>