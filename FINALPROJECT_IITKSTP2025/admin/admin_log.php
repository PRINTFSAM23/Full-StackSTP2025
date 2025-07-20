<?php
session_start();
$msg = "";

if (isset($_POST['loginBtn'])) {
    $username = $_POST['txtuname'];
    $password = $_POST['txtpwd'];

    $con = mysqli_connect("localhost", "root", "", "florifydb");

    $qry = "SELECT * FROM users WHERE email_id='$username' AND password='$password' AND role='Admin'";
    $result = mysqli_query($con, $qry);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['uid'] = $row[0];
        $_SESSION['name'] = $row[1];
        header("Location: dashboard.php");
        exit();
    } else {
        $msg = "<div style='color: red; text-align:center; margin-bottom:10px;'>Invalid credentials or not an admin!</div>";
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Florify</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap" rel="stylesheet">

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
        .submit-arrow {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            display: block;
            width: 100%;
        }
        .submit-arrow i {
            margin-right: 8px;
        }
        .submit-arrow:hover {
            background-color: #218838;
        }
        .input-group-custom {
            position: relative;
            margin-bottom: 15px;
        }
        .input-group-custom i {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #6c757d;
        }
        .input-group-custom input {
            padding-left: 35px;
            width: 100%;
            height: 38px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .footer-link {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="text-center" style="padding-top: 60px; padding-bottom: 30px;">
        <img src="images/logo.png" alt="Florify Logo" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    </div>


    <div class="container mt-3" style="max-width: 500px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid #e3e3e3;">
        <h2 class="mb-4 text-center" style="font-weight: 600;">Admin Login</h2>

        <form method="post">
            <div class="input-group-custom">
                <i class="fas fa-user-shield"></i>
                <input type="text" name="txtuname" placeholder="Username" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-lock"></i>
                <input type="password" name="txtpwd" placeholder="Password" required />
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="rememberme" id="rem1">
                <label class="form-check-label" for="rem1" style="font-size: 14px;">
                    Remember me
                </label>
            </div>

            <?php echo $msg; ?>

            <button type="submit" name="loginBtn" class="submit-arrow">
                <i class="fas fa-arrow-right"></i> Login
            </button>
        </form>

        <div class="footer-link">
            Not an Admin? <a href="../user/log_reg.php">User Login</a>
        </div>
    </div>
</body>
</html>
