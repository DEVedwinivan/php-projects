<?php 
include "layouts/header.php";

$file = "data/contact.json";
$contact = [];
if(file_exists($file)){
    $json = file_get_contents($file);
    $contact = json_decode($json, true);
}
?>

    <section class="table">
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Options</th>
            </tr>
            <?php foreach ($contact as $con): ?>
            <tr>
                <td><?= htmlspecialchars($con['name'])   ?></td>
                <td><?= htmlspecialchars($con['address'])   ?></td>
                <td><?= htmlspecialchars($con['email'])   ?></td>
                <td><?= htmlspecialchars($con['tel'])   ?></td>
                <td><a href="edit.php?id=<?= $con['id']; ?>" class="update">Update</a> - <a href="delete.php?id=<?= $con['id']; ?>" class="delete">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>


    </section>
<?php
include "layouts/footer.php";
?>