<?php
include "layouts/header.php";

$option = $_POST['options'] ?? '';
$value = $_POST['value'] ?? '';
?>
<section class="form">
    <form action="" method="post">
        <select name="options" id="">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <input type="text" name="value" placeholder="Enter the Value">
        <Button type="submit">Convert</Button>
    </form>

</section>

<section class="results">
    <p class="value">The value to be converted is: <span><?= $value ?> </span></p>
<?php
        if ($option == "celsius") {
            $f = ($value * 1.8) + 32;
            $k = $value + 273.15;
            echo "<p class='result'>Conversion results: <span>".$f." °F,"." ".$k." K </span></p>";
        }elseif ($option == "fahrenheit") {
            $c = ($value - 32) * 5/9;
            $k = ($value + 459.67) * 5/9;
            echo "<p class='result'>Conversion results: <span>".$c." °C,"." ".$k." K </span></p>";
        }elseif ($option == "kelvin") {
            $c = $value - 273.15;
            $f = $value * 9/5 - 459.67;
                        echo "<p class='result'>Conversion results: <span>".$c." °C,"." ".$f." °F </span></p>";
        }

?>
</section>
<?php
include "layouts/footer.php";
?>