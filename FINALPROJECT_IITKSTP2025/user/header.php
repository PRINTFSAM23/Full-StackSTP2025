<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Florify Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <style>
        body {
            margin: 0;
            padding-top: 120px;
            font-family: 'Segoe UI', sans-serif;
        }

        .logo-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
        }

        .navbar-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            z-index: 1000;
        }

        .navbar-container {
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li a,
        .dropdown-toggle {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s;
        }

        .nav-links li a:hover,
        .dropdown:hover .dropdown-toggle,
        .nav-links li.active a {
            background-color: #f44360;
            color: white;
        }

        .dropdown-menu {
            border-radius: 10px;
            background-color: white;
            padding: 10px 0;
            border: 1px solid #ccc;
        }

        .dropdown-menu .dropdown-item {
            padding: 8px 20px;
            font-weight: 500;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f44360;
            color: white;
        }

        .auth-area {
            text-align: center;
        }

        .auth-area .btn {
            background-color: #f44360;
            color: white;
            border-radius: 25px;
            padding: 6px 18px;
            margin-top: 5px;
        }

        .auth-area .btn:hover {
            background-color: #e0304b;
        }

        .footer_backgorund {
            background-color: #f8f8f8;
            text-align: center;
            padding: 20px;
            font-weight: 500;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 20px;
            }

            .nav-links {
                flex-direction: column;
                gap: 10px;
                width: 100%;
            }

            .auth-area {
                margin-top: 10px;
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>

    <div class="navbar-wrapper">
        <div class="navbar-container">

            <a href="index.php">
                <img src="images/logo.png" alt="Florify Logo" class="logo-img">
            </a>

            <ul class="nav-links">

                <li><a href="index.php">Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Categories <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="birthday.php">Birthday</a></li>
                        <li><a href="anniversary.php">Anniversaries</a></li>
                        <li><a href="event.php">Events</a></li>
                    </ul>
                </li>


                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="view_orders.php">Order History</a></li>
            </ul>

            <div class="auth-area">
                <div>
                    <?php
                        if (isset($_SESSION['name'])) {
                            echo "Welcome " . $_SESSION['name'];
                        }
                    ?>
                </div>
                <?php
                    if (!isset($_SESSION['name'])) {
                        echo "<a href='log_reg.php' class='btn'>Login</a>";
                    } else {
                        echo "<a href='logout.php' class='btn'>Logout</a>";
                    }
                ?>
            </div>

        </div>
    </div>

</body>
</html>
