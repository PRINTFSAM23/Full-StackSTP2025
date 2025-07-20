<?php
$msg = "";
if (isset($_POST['loginBtn'])) {
    $name = trim($_POST['txtname']);
    $pwd = $_POST['txtpwd'];
    $pwd1 = $_POST['txtpwd1'];
    $email = trim($_POST['txtemail']);
    $no = trim($_POST['phntxt']);

    if ($pwd !== $pwd1) {
        $msg = "<font color='red'>Passwords do not match!</font>";
    } else {
        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

        $con = mysqli_connect("localhost", "root", "", "florifydb");

        if (!$con) {
            $msg = "<font color='red'>Database connection failed!</font>";
        } else {
            $stmt = $con->prepare("INSERT INTO users (name, email_id, password, phoneno, role) VALUES (?, ?, ?, ?, 'Client')");
            $stmt->bind_param("sssi", $name, $email, $hashed_pwd, $no);

            if ($stmt->execute()) {
                $msg = "<font color='green'>Registration Successful</font>";
            } else {
                $msg = "<font color='red'>Error in registration. Try again</font>";
            }

            $stmt->close();
            mysqli_close($con);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Florify</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
        <h2 class="mb-4 text-center" style="font-weight: 600;">Register</h2>
        <form method="post">
            <div class="input-group-custom">
                <i class="fas fa-user"></i>
                <input type="text" name="txtname" placeholder="Name" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-lock"></i>
                <input type="password" name="txtpwd" placeholder="Password" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-lock"></i>
                <input type="password" name="txtpwd1" placeholder="Confirm Password" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-envelope"></i>
                <input type="email" name="txtemail" placeholder="Email ID" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-phone"></i>
                <input type="number" name="phntxt" placeholder="Phone Number" required />
            </div>

            <div style="margin-bottom: 10px; text-align:center;">
                <?php echo $msg; ?>
            </div>

            <button type="submit" name="loginBtn" class="submit-arrow">
                <i class="fas fa-arrow-right"></i> Register
            </button>
        </form>

        <div class="footer-link">
            Already have an account? <a href="log_reg.php">Login here</a><br>
            Admin? <a href="../admin/admin_log.php">Login here</a>
        </div>
    </div>
</body>
</html>
