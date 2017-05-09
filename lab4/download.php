<?php
$fileID = filter_input(INPUT_GET, 'fileID');
$fileLocation = '.'. DIRECTORY_SEPARATOR .'uploads' . DIRECTORY_SEPARATOR . $fileID;
//$fileID = $_GET['fileID'];       
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); 

$file = new SplFileObject($fileLocation, "r");
$contents = $file->fread($file->getSize());
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($fileLocation);
header('Content-Type: '.$mimeType);
header('Content-Disposition: attachment; filename="'. $file->getPathname() . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . $file->getSize());

echo $contents;

exit;
?>