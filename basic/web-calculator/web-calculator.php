<?php

$first = $_GET ['first'] ?? '';
$second = $_GET['second'] ?? '';
$options = $_GET['options'] ?? '';
if ($options == "addition") {
    $results = $first + $second;
    echo "result ".$results;
}elseif ($options == "subtraction") {
    $results = $first - $second;
    echo "result ".$results;
}elseif ($options == "multiplication") {
    $results = $first * $second;
    echo "result ".$results;
}elseif($options == "division") {
    if($second == 0){
        echo "Error";
    }else{
        $results = $first / $second;
        echo "result ".$results;
    }
}


