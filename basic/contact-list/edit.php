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
    foreach ($contact as &$con) {
        if ($con['id'] == $id) {
            $con['name'] = $_POST['name'];
            $con['address'] = $_POST['address'];
            $con['email'] = $_POST['email'];
            $con['tel'] = $_POST['tel'];
            break;
        }
    }
    unset($con);
    $json = json_encode($contact, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
    header("location:index.php");
    exit;
}

?>


    <section class="form">
    <form method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= htmlspecialchars($specificContact['name']) ?>">
        </div>
        <div>    
            <label for="address">Address</label>
            <input type="text" name="address" value="<?= htmlspecialchars($specificContact['address']) ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= htmlspecialchars($specificContact['email']) ?>">
        </div>
        <div>
            <label for="tel">Telephone</label>
            <input type="text" name="tel" value="<?= htmlspecialchars($specificContact['tel']) ?>">
        </div>
            <input class="btn" type="submit" value="Update Contact">
        </form>
    </section>


<?php
include "layouts/footer.php";
?>