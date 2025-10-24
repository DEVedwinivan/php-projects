<?php 
include 'layouts/header.php';

$option = $_POST['options'];
$value = $_POST['value'] ?? '';


?>
    <section class="form">
        <form action="" method="post">
            <select name="options" id="">
                <option value="meters">Meters</option>
                <option value="kilometers">Kilometers</option>
                <option value="centimeters">Centimeters</option>
            </select>
            <input type="text" name="value" placeholder="Enter the Value">
            <Button type="submit">Convert</Button>
        </form>
    </section>
    <section class="results">
        <p class="value">The value to be converted is: <span><?= $value ?> </span></p>
<?php
        if ($option == "meters") {
            $km = $value / 1000;
            $cm = $value * 100;
            echo "<p class='result'>Conversion results: <span>".$km."km"." ".$cm."cm </span></p>";
        }elseif ($option == "kilometers") {
            $meter = $value * 1000;
            $cm = $value * 100000;
            echo "<p class='result'>Conversion results: <span> ".$meter."m"." ".$cm."cm </span></p>";
        }elseif ($option == "centimeters") {
            $km = $value / 100000;
            $meter = $value / 100;
            echo "<p class='result'>Conversion results: <span> ".$km."km"." ".$meter."m </span></p>";
        }

?>
    </section>
<?php
        include 'layouts/footer.php'
?>