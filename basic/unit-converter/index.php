<?php
$value = $_POST['valueone'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Unit Converter</title>
</head>
<body>
    <section class="form"> 
        <form method="post">
            <select>
                <option value="lenght">Lenght</option>
                <option value="weight">Weight</option>
                <option value="temperature">Temperature</option>
                <option value="volume">Volume</option>
            </select>

            <input name="valueone" type="text">
            <input name="" type="text">
            <input name="" type="text">
            <button type="submit">Convert</button>
        </form>
    <section class="result">
        <?= $value ?>
        <?= $value ?>
        <?= $value ?>
    </section>
    </section>

</body>
</html>