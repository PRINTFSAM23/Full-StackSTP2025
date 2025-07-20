<?php
    $msg ="";
    if(isset($_POST['adduser'])){
        $name= $_POST['txtname'];
        $pwd= $_POST['txtpwd'];
        $email= $_POST['txtemail'];
        $no = $_POST['phntxt'];
        $user= $_POST['user_type'];

        $con = mysqli_connect("localhost","root","","florifydb");
        $qry = "insert into users(name,email_id,password,phoneno,role) values('$name','$email','$pwd',$no,'$user')";
        mysqli_query($con,$qry);
        $i=mysqli_affected_rows($con);
        if($i>0){
            $msg = "<font color ='green'>Registration Successfull</font>";
        }
        else{
            $msg= "<font color ='red'>Error in registration. Try again</font>";
        }
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registeration-Florify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border-radius: 12px;
      border: 1px solid #eee;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }
    .form-label {
      font-weight: 600;
    }
  </style>
</head>

<body>
  <?php include_once("header.php"); ?>


    <div class="text-center" style="padding-top: 60px; padding-bottom: 30px;">
        <img src="images/logo.png" alt="Florify Logo" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    </div>



  <div class="container mt-3" style="max-width: 800px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid #e3e3e3;">
    <h2 class="mb-4 text-center" style="font-weight: 600;">Add New User</h2>

    <form method="post" class="form-group">
      <div class="card p-4 mb-4">
        <div class="form-group mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="txtname" class="form-control" value=""/>
        </div>

        <div class="form-group mb-3">
          <label class="form-label">Password</label>
          <input type="Password" name="txtpwd" class="form-control" value=""/>
        </div>

        <div class="form-group mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="Password" name="txtpwd1" class="form-control" value=""/>
        </div>

        <div class="form-group mb-3">
          <label class="form-label">Email-id</label>
          <input type="email" name="txtemail" class="form-control" value=""/>
        </div>

        <div class="form-group mb-3">
          <label class="form-label">Phone Number</label>
          <input type="number" name="phntxt" class="form-control" value=""/>
        </div>

        <div class="form-group mb-4">
          <label class="form-label">User Type</label>
          <select class="form-control" name="user_type">
            <option></option>
            <option>Admin</option>
            <option>Client</option>
          </select>
        </div>


        <div class="text-center">
          <?php echo $msg . "<br>"; ?>
          <input type="submit" value="Add" name="adduser" class="btn btn-success px-4 py-2" style="font-weight: 500;">
        </div>
      </div>
    </form>
  </div>
</body>
</html>
