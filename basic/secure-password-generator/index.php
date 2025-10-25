<?php

$length = isset($_POST['cant']) ? (int)$_POST['cant'] : 0;
 function generate_password($length) {
    if($length <= 5) return "Invalid length, please add a value greater than 5.";
    $pass = '';
    $parameter = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ#$!%&?";
    $max = strlen($parameter) -1;

    for ($i=0; $i < $length ; $i++) { 
        $pass .= $parameter[random_int(0, $max)];
    }

    return $pass;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Edwin Velazquez">
    <meta name="description" content="Generator of random and secure passwords with configurable parameters.">


    <link rel="stylesheet" href="css/style.css">
    <title>Secure Password Generator</title>
</head>
<body>
    <section class="all">
        <form action="" method="post">
            <input type="number" name="cant" placeholder="Enter the number of characters" min="6" max="50" required>
            <button type="submit">Submit</button>
        </form>

        <?php
        if ($length > 5) {
            echo "<p class='password'><b class='bold'>Your password:</b> " . generate_password($length) . "</p>";
        }
        ?>
    </section>
</body>
</html>




