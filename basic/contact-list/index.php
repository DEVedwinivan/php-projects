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
            <?php foreach ($contact as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['name'])   ?></td>
                <td><?= htmlspecialchars($c['address'])   ?></td>
                <td><?= htmlspecialchars($c['email'])   ?></td>
                <td><?= htmlspecialchars($c['tel'])   ?></td>
                <td><button class="update">Update</button> - <button class="delete">Delete</button></td>
            </tr>
            <?php endforeach; ?>
        </table>


    </section>
<?php
include "layouts/footer.php";
?>