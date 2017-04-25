<?php
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
                <p>uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p>
                <img src="<?php echo $fileInfo->getPathname(); ?>" />
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>



?>
