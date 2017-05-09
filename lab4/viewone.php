<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
        <title>View File</title>
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
        
        ?>

        <?php foreach ($directory as $fileInfo) : ?>        
            <?php if ( $fileInfo->isFile() ) : ?>
                <?php if ($fileInfo->getFilename() === $fileID) : ?>
                <h2><?php echo $fileInfo->getFilename(); ?></h2>
                <p>This file was uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?>.</p>
                <p>This file is exactly <?php echo $fileInfo->getSize(); ?> bytes.</p>
                <?php 
                $fileLocation = '.'. DIRECTORY_SEPARATOR .'uploads' . DIRECTORY_SEPARATOR . $fileID;
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $mimeType = $finfo->file($fileLocation); ?>
                <p>This file has a type of <?php echo $mimeType; ?>.</p>
                <?php switch($mimeType){ 
                        case 'image/jpeg': 
                        case 'image/png': 
                        case 'image/gif': ?>
                        <img src="<?php echo $fileInfo->getPathname(); ?>" />
                <?php break;
                        case 'text/plain':
                       // $txtfile = new SplFileObject($fileInfo->getPathname()); ?>
                        <iframe src ="<?php echo $fileLocation; ?>" class="embed-responsive-item"></iframe>
                <?php break;
                        case 'application/pdf':
                        case 'text/html': ?>
                        <iframe src="<?php echo $fileLocation; ?>"><embed src="<?php echo $fileLocation; ?>"></embed></iframe>
                <?php break; ?>
                        
                        
                         
                ?>
                
                <?php } ?>
                <?php endif; ?> 
            <?php endif; ?>
        <?php endforeach; ?>
        <br />
<a href="deleteone.php?fileID=<?php echo $fileID;?>"> <button>Delete</button></a>
<a href="download.php?fileID=<?php echo $fileID;?>"> <button>Download</button></a>

    </body>
</html>