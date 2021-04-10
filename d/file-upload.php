
<html>
<head>
<title>Telecharger Ton fichier </title>
</head>
<body>
  Selectionee ton Fichier: <br />
              <form action="file-upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="file" size="50" />
              <br />
              <input type="submit" value="Telcharger ton fichier " />
              </form>

  <?php
  if( $_FILES['file']['name'] != "" ) {
      $path=$_FILES['file']['name'];
      $pathto="".$path;
      move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "on ne peux pas telecharger ce fichier!");
  }
  else {
      die("specifie ton fichier!");
  }
  ?>
<h2>Ton fichier a ete telecharger avec succes</h2>
<ul>
<li>Ton fichier a ete telecharger avec succes: <?php echo $_FILES['file']['name'];  ?>

</ul>
</body>
</html>
