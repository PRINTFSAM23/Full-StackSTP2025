<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products - Florify</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #fff7f1;
            font-family: 'Segoe UI', sans-serif;
        }

        .content-container {
            margin-left: 60px;
            padding: 40px 30px;
        }


        .card-custom {
            border: 1px solid #e2e2e2;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .table th,
        .table td {
            vertical-align: middle !important;
        }

        .table img {
            width: 100px;
            height: auto;
            border-radius: 10px;
        }

        h2 {
            margin-bottom: 25px;
            font-weight: 600;
            color: #5c4084;
        }

        .width_site {
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include_once("header.php"); ?>

    <div class="content-container">
        <div class="card card-custom">
            <h2>View Products</h2>

            <?php
                $con = mysqli_connect("localhost", "root", "", "florifydb");
                $qry = "SELECT * FROM products";
                $result = mysqli_query($con, $qry);
                $destinationPath = "/STP25/final_project/";

                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-light'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Stock</th>
                        </tr>
                      </thead><tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>&#8377;$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td><img src='$destinationPath$row[4]' alt='Product Image'/></td>";
                    echo "<td>$row[5]</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            ?>
        </div>
    </div>
</body>
</html>
