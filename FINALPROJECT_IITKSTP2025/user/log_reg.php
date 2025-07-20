<?php 
    $msg = "";
    session_start();

    if (isset($_POST['loginBtn'])) {
        $username = trim($_POST['txtuname']);
        $password = $_POST['txtpwd'];

        $con = mysqli_connect("localhost", "root", "", "florifydb");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $stmt = $con->prepare("SELECT user_id, name, password FROM users WHERE email_id = ? AND role = 'Client'");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                $_SESSION['uid'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                header("Location: index.php");
                exit();
            } else {
                $msg = "<div class='alert alert-danger text-center'>Incorrect password!</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger text-center'>Invalid Username or Password!</div>";
        }

        $stmt->close();
        mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login - Florify</title>

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
            background-color: #007bff;
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
            background-color: #0056b3;
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

    <script>
        function validateForm() {
            const email = document.forms["loginForm"]["txtuname"].value.trim();
            const password = document.forms["loginForm"]["txtpwd"].value.trim();
            if (email === "" || password === "") {
                alert("Please enter both email and password.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <div class="text-center" style="padding-top: 60px; padding-bottom: 30px;">
        <img src="images/logo.png" alt="Florify Logo" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    </div>

    <div class="container mt-3" style="max-width: 500px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.05); border: 1px solid #e3e3e3;">
        <h2 class="mb-4 text-center" style="font-weight: 600;">User Login</h2>

        <form name="loginForm" method="post" onsubmit="return validateForm();">
            <div class="input-group-custom">
                <i class="fas fa-envelope"></i>
                <input type="text" name="txtuname" placeholder="e-mail address" required />
            </div>

            <div class="input-group-custom">
                <i class="fas fa-lock"></i>
                <input type="password" name="txtpwd" placeholder="password" required />
            </div>

            <?php echo $msg; ?>

            <button type="submit" name="loginBtn" class="submit-arrow">
                <i class="fas fa-arrow-right"></i> Login
            </button>
        </form>

        <div class="footer-link">
            Don't have an account? <a href="reg.php">Register here</a><br>
            Admin? <a href="../admin/admin_log.php">Login here</a>
        </div>
    </div>

</body>
</html>
