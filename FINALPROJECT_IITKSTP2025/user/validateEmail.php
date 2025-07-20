<?php
    $email = $_GET['id'];
    $con = mysqli_connect("localhost","root","","florifydb");
    $qry = "select * from users where email_id = '$email'";
    $result= mysqli_query($con, $qry);
    if(mysqli_num_rows($result)>0)
        echo "<font color='red'>Already Exists !!!!</font>";
    else
        echo "<font color='green'>Avaiable !!!!</font>";
    mysqli_close($con);
?>