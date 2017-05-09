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
 $folder = './uploads';
 if(!is_dir($folder)){
     die('Folder <strong>' . $folder . '</strong> does not exist');
 }
 $directory = new DirectoryIterator($folder);
 $i = 1;
?>       <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>File Name</th>
      <th>Details</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($directory as $fileInfo) : ?>
        <?php if ($fileInfo->isFile()) : ?>
      <tr><td><?php echo $i . ". " . $fileInfo->getFilename();?></td>
          <td>  <a href="viewone.php?fileID=<?php echo $fileInfo->getFilename(); ?>"><button>Details</button></a></td>
          <td> <a href="deleteone.php?fileID=<?php echo $fileInfo->getFilename();?>"> <button>Delete</button></a></td>
        </tr>
        <?php $i++; ?>
        <?php endif; ?>
        <?php endforeach; ?>
  </tbody>
</table>
    </body>
</html>