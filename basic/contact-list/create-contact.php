<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    echo $name.$address.$email.$tel;

    $data=[];
        $data[] = [
            "name" => $name,
            "address" => $address,
            "email" => $email,
            "tel" => $tel
        ];

$file= 'datos.json';
$file_exist = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$update_data = array_merge($file_exist, $data);

$json = json_encode($update_data, JSON_PRETTY_PRINT);

if(file_put_contents($file, $json)){
    header("location: index.php");
}
?>