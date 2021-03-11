<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Temperature Conversion</title>
</head>
<body>

    <form action="temperature.php" method="post">
        Enter Value: <input type="number" name="num_field" required>    
        To: <select name="temperature">
            <option value="S">Select</option>
            <option value="C">Celcius</option><br>
            <option value="F">Farenheit</option>
        </select>

        <br><br>
        <input type="submit" name="submit" value="Convert">
    
    </form>
</body>
</html>

<?php

    if (isset($_POST["submit"])) {
        $num_field = $_POST["num_field"];
        $temp = $_POST["temperature"];

        if ($temp == "C") {
            $result = $num_field * 9 / 5 + 32;
            // display the result
            echo "Result: " . $result . " Farenheit";
        } else if ($temp == "F") {
            $result = ($num_field - 32) * 5 / 9;
            // display the result
            echo "Result: " . $result . " Celcius";
        } else {
            echo "Please select temperature";
        }
    }

?>


