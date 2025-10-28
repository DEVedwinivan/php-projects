<?php
include 'connection.php';
$id = null;
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$time = null;
$stmt = $mysqli->prepare("INSERT INTO users(id, name, email, password, created_at) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $id, $name, $email, $pass, $time);
$stmt->execute();
header('location: /php-projects/intermediate/auth-system/home.php');
exit;
// echo "Hello " . $name . " Your email is: " . $email . " and your password is " . $encrypt;



?>
