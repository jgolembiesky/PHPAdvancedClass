<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload a File</title>
       <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
    </head>
    <body>
        <?php include 'navbar.html'; ?>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            Upload this file: <input name="upfile" type="file" />
            <input type="submit" value="Send File" />
        </form>
    </body>
</html>