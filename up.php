<?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message']).'</p>';
      unset($_SESSION['message']);
    }

    $uploadFileDir = 'uploads/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  $message ='File is successfully uploaded.';
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}
  ?>
