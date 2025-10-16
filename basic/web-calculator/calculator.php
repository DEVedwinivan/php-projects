<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO meta tags -->
    <meta name="author" content="Edwin Velazquez">
    <meta name="description" content="This page is a basic website where you can perform simple mathematical operations">

    <link rel="stylesheet" href="style.css">
    <title>Web Calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <label for="first">First Value</label>
        <input type="text" name="first">

        <label for="second">Second Value</label>
        <input type="text" name="second">

        <select name="options">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <input class="btn" type="submit" value="Submit">
    </form>
<br>
    <?php
        include ("web-calculator.php");
        if (!isset($_SESSION['result'])) {
            $_SESSION['result'] = [];
        }
        $_SESSION['result'][] = $results ?? '';
        if (isset($_SESSION['result'])) {
            foreach ($_SESSION['result'] as $r) {
                echo "Results history: $r<br>";
            }
        }

    ?>
</body>
</html>