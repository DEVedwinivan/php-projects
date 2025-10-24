<?php
include "layouts/header.php";

$option = $_POST['options'];
$value = $_POST['value'] ?? '';
?>
<section class="form">
    <form action="" method="post">
        <select name="options" id="">
            <option value="kilograms">Kilograms</option>
            <option value="grams">Grams</option>
            <option value="pounds">Pounds</option>
        </select>
        <input type="text" name="value" placeholder="Enter the Value">
        <Button type="submit">Convert</Button>
    </form>

</section>

<section class="results">
    <p class="value">The value to be converted is: <span><?= $value ?> </span></p>
<?php
        if ($option == "kilograms") {
            $grams = $value * 1000;
            $pounds = $value * 2.20462262;
            echo "<p class='result'>Conversion results: <span>".$grams."g,"." ".$pounds."lbs </span></p>";
        }elseif ($option == "grams") {
            $kg = $value / 1000;
            $pounds = $value / 453.59237;
            echo "<p class='result'>Conversion results: <span> ".$kg."kg,"." ".$pounds."lbs </span></p>";
        }elseif ($option == "pounds") {
            $kg = $value /  2.20462262;
            $grams = $value * 453.59237;
            echo "<p class='result'>Conversion results: <span> ".$kg."kg,"." ".$grams."g </span></p>";
        }

?>
</section>
<?php
include "layouts/footer.php";
?>