<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User - Florify</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #fff7f1;
        }
        .content-container {
            max-width: 1000px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #6a1b9a;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <?php include_once("header.php"); ?>

    <div class="content-container">
        <h2 class="mb-4">User Details</h2>
        <?php
            $con = mysqli_connect("localhost", "root", "", "florifydb");
            $qry = "SELECT * FROM users";
            $result = mysqli_query($con, $qry);
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='thead-dark'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Phone</th>
                    </tr>
                  </thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        ?>
    </div>

</body>
</html>
