<?php
include "layouts/header.php";

$option = $_POST['options'] ?? '';
$value = $_POST['value'] ?? '';
?>
<section class="form">
    <form action="" method="post">
        <select name="options" id="">
            <option value="liter">Liter</option>
            <option value="milliliter">Milliliter</option>
            <option value="gallon">Gallon</option>
        </select>
        <input type="text" name="value" placeholder="Enter the Value">
        <Button type="submit">Convert</Button>
    </form>
</section>

<section class="results">
    <p class="value">The value to be converted is: <span><?= $value ?> </span></p>
<?php
        if ($option == "liter") {
            $ml = $value * 1000;
            $gal = $value / 3.78541178;
            echo "<p class='result'>Conversion results: <span>".$ml." ML,"." ".$gal." Gal </span></p>";
        }elseif ($option == "milliliter") {
            $l = $value / 1000;
            $gal = $value / 3785.41178;
            echo "<p class='result'>Conversion results: <span>".$l." L,"." ".$gal." Gal </span></p>";
        }elseif ($option == "gallon") {
            $l = $value * 3.78541178;
            $ml = $value * 3785.41178;
                        echo "<p class='result'>Conversion results: <span>".$l." L,"." ".$ml." ML </span></p>";
        }

?>
</section>
<?php
include "layouts/footer.php";
?>