<?php
include "database/connection.php";

$result = $mysqli->prepare("SELECT name FROM users");
$result->execute();

$result->bind_result($out_name);
$out_name = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Auth System</title>
</head>
<body>
    <section class="d-flex justify-content-center align-items-center" style="height: 30vh;">
        <article class="w-75 border-start border-5 border-secondary bg-light h-75">
            <h2>Congratulations <b>
            <?php 
                while ($result->fetch()) {
                    echo $out_name;
                }
            ?></b>, you have an account!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, sed! Eius, pariatur. Voluptatum ullam saepe, debitis veniam quam labore expedita quas rem possimus beatae suscipit dignissimos delectus libero a tempore.</p>
        </article>
    </section>
</body>

<!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>