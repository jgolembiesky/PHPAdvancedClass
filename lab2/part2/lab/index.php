<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
    </head>
    <body>
        <?php
        require_once './autoload.php';
        $address = new CRUD();
       
        $addresses = $address->readAllAddress();
        include './templates/view-address.html.php';
        ?>
    </body>
</html>
