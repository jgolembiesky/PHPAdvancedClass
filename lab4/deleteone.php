<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
        <title></title>
    </head>
    <body>
<?php
include 'navbar.html';
$fileID = $_GET['fileID'];

 $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);
        try{
        unlink($folder . '/' . $fileID);
        echo("Successfully deleted " . $fileID . '.' );
        }
        catch(Exception $e) {
            echo("Attempt to delete " . $fileID . ' failed.');
        }
        
        ?>
        <a href="viewall.php"><button>Return</button></a>
    </body>
</html>