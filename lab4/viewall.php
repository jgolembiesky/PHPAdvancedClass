<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
 $folder = './uploads';
 if(!is_dir($folder)){
     die('Folder <strong>' . $folder . '</strong> does not exist');
 }
 $directory = new DirectoryIterator($folder);
 $i = 1;
?>         
        <?php foreach ($directory as $fileInfo) : ?>
        <?php if ($fileInfo->isFile()) : ?>
        <h2><?php echo $i . ". " . $fileInfo->getFilename();?>
            <a href="viewone.php?fileID=<?php echo $fileInfo->getFilename(); ?>"><button>Details</button></a>
        </h2>
        <?php $i++; ?>
        <?php endif; ?>
        <?php endforeach; ?>
    </body>
</html>