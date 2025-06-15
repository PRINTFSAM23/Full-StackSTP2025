<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>ENTER NUMBER</label>
        <input type="number" name="t1" value=""/><br>
        <button type="submit" name="b1">Cube Of No.</button>
        <button type="submit" name="b2">Table Of No.</button>
        <button type="submit" name="b3">Factorial</button>
        <button type="submit" name="b4">Prime Or Not</button>
        <br>
        <?php
        if (isset($_GET['t1']) && $_GET['t1'] !== "") {
            $num = $_GET['t1'];


        if (isset($_GET['b1'])) {
            $cube = $num*$num*$num;
        echo "Cube: $cube<br>";
        }

        if (isset($_GET['b2'])) {
            for ($i=1; $i <= 10; $i++) { 
                echo "$num x $i = " . ($num * $i) . "<br>";
            }
        }
        if (isset($_GET['b3'])) {
            $fact = 1;
            for ($i=1; $i <= $num ; $i++) { 
                $fact = $fact*$i;
            }
        echo $fact;
        echo "<br>";
        }
        if (isset($_GET['b4'])) {
            if ($num <= 1) 
            {
                echo $num." is not a Prime Number<br>";
            }
            else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$num is a Prime Number<br>";
            } else {
                echo "$num is not a Prime Number<br>";
            }
        }
    }
}
        ?>
    </form>
</body>
</html>