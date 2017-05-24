<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'navbar.html';
        include './models/dbconnect.php';
        include './models/addresscrud.php';
        $addresses = readAllAddress();
        include './templates/view-address.html.php';
        ?>
    </body>
</html>
