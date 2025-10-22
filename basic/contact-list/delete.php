<?php
$id = $_GET['id'];
$file = "data/contact.json";
$json = file_get_contents($file);
$contact = json_decode($json, true);

foreach ($contact as $con => $specificContact) {
    if ($specificContact['id'] == $id) {
        unset($contact[$con]);
        break;
    }
}

$contact = array_values($contact);



file_put_contents($file, json_encode($contact, JSON_PRETTY_PRINT));
header('location:index.php')
?>