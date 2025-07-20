<?php
    $pid=$_GET['pid'];
    if(isset($_COOKIE['cart'])){
        $data = $_COOKIE['cart'];
        $data = $data.",".$pid;
        setcookie("cart", $data);
    }
    else{
        setcookie("cart",$pid);
    }
    header("location:desc.php?pid=$pid");
?>