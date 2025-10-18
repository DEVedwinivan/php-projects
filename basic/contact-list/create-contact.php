<?php
include "layouts/header.php";
$file = "data/contact.json";
$contact = [];
if(file_exists($file)){
    $contact = json_decode(file_get_contents($file), true);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $newContact = [
        "id" => time(),
        "name" => $_POST['name'],
        "address" => $_POST['address'],
        "email" => $_POST['email'],
        "tel" => $_POST['tel'],
    ];
    $contact[] = $newContact;
    file_put_contents($file, json_encode($contact, JSON_PRETTY_PRINT));
    header("location:index.php");
}
?>
    <section class="form">
    <form method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>    
            <label for="address">Address</label>
            <input type="text" name="address">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="tel">Telephone</label>
            <input type="text" name="tel">
        </div>
            <input class="btn" type="submit" value="Submit">
        </form>
    </section>


<?php
include "layouts/footer.php";
?>