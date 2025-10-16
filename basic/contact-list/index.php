<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO meta tags-->
    <meta name="author" content="Edwin Velazquez">
    <meta name="description" content="This page is a basic website where you can perform basic CRUD (create, read, update, and delete) operations. The data is stored without a database in a JSON file.">

    <link rel="stylesheet" href="style.css">
    <title>Contact List</title>
</head>
<body>
    <header>
        <h1>Contact List</h1>
        <nav>
            <a href="index.php">Read</a>
            <a href="create-contact.html">Create</a>
        </nav>
    </header>
            <?php
        include "datos.json";
        ?>
    <section class="table">
        
        <!-- <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Options</th>
            </tr>
            <tr>
                <td>Edwin</td>
                <td>Lomas del Cadete</td>
                <td>edwin@gmail.com</td>
                <td>5587817311</td>
                <td><button class="update">Update</button> - <button class="delete">Delete</button></td>
            </tr>
        </table> -->


    </section>

</body>
</html>