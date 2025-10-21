<?php
include "layouts/header.php";

$file = "data/contact.json";
if(file_exists($file)){
    $contact = json_decode(file_get_contents($file), true);
}
$id = $_GET['id'] ?? null;
$specificContact = null;
foreach ($contact as $con) {
    if ($con['id'] == $id) {
        $specificContact = $con;
        break;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    foreach ($contact as $con) {
        if ($con['id'] == $id) {
            $con['name'] = $_POST['name'];
            $con['address'] = $_POST['address'];
            $con['email'] = $_POST['email'];
            $con['tel'] = $_POST['tel'];
            break;
        }
    }
    file_put_contents($file, json_encode($contact, JSON_PRETTY_PRINT));
    header("location:index.php");
    exit;
}

?>


    <section class="form">
    <form method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= $specificContact['name'] ?>" required>
        </div>
        <div>    
            <label for="address">Address</label>
            <input type="text" name="address" value="<?= $specificContact['address'] ?>" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $specificContact['email'] ?>" required>
        </div>
        <div>
            <label for="tel">Telephone</label>
            <input type="text" name="tel" value="<?= $specificContact['tel'] ?>" required>
        </div>
            <input class="btn" type="submit" value="Submit">
        </form>
    </section>


<?php
include "layouts/footer.php";
?>