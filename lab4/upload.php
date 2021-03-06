<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.css">
        <title></title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
<?php
include 'navbar.html';
    class Filehandler{
        function upLoad($keyName){
            if(!isset($_FILES[$keyName]['error']) || is_array($_FILES[$keyName]['error'])){
                throw new RuntimeException('Invalid parameters.');
            }
            //Check $_FILES['upfile']['error'] value.
                switch ($_FILES[$keyName]['error']){
                    case UPLOAD_ERR_OK:
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        throw new RuntimeException('No file sent.');
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        throw new RuntimeException('Exceeded filesize limit.');
                    default:
                        throw new RuntimeException('Unknown errors.');
                }
                //Check filesize
                 if ($_FILES[$keyName]['size'] > 10000000) {
                    throw new RuntimeException('Exceeded filesize limit.');
                }
                //Check MIME type
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $validExts = array(
                    
                    'txt' => 'text/plain',
                    'html' => 'text/html',
                    'pdf' => 'application/pdf',
                    'doc' => 'application/msword',
                    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'xls' => 'application/vnd.ms-excel',
                    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif'
                );
                $ext = array_search($finfo->file($_FILES[$keyName]['tmp_name']), $validExts, true);
            
                if (false === $ext) {
                    throw new RuntimeException('Invalid file format.');
                }
                //Naming the file uniquely. Obtaining safe unique name from binary data.
                $salt = uniqid(mt_rand(), true);
                $fileName = 'img_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                $location = sprintf('./uploads/%s.%s', $fileName, $ext);
                
                if(!is_dir('./uploads')){
                    mkdir('./uploads');
                }
                if (!move_uploaded_file($_FILES[$keyName]['tmp_name'], $location)){
                    throw new RuntimeException('Failed to move uploaded file.');
                }
                return $fileName . '.' . $ext;
                }
    }

    $filehandler = new Filehandler();
    try{
        $fileName = $filehandler->upLoad('upfile');
    } catch (RuntimeException $e) {
        $error = $e-> getMessage();
    }
?>

<?php if ( isset($fileName) ) : ?>
            <h2><?php echo $fileName; ?> is uploaded successfully.</h2>
        <?php else: ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
</body>
</html>