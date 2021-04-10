Selectionee ton Fichier: <br />
            <form action="file-upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" size="50" />
            <br />
            <input type="submit" value="Telcharger ton fichier " />
            </form>

<?php
if( $_FILES['file']['name'] != "" ) {
    $path=$_FILES['file']['name'];
    $pathto="uploads/".$path;
    move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "on ne peux pas telecharger ce fichier!");
}
else {
    die("specifie ton fichier!");
}
?>
<html>
<head>
<title>Ton fichier a ete telecharger avec success</title>
</head>
<body>
<h2>Voici les information de votre fichier qui a ete telecharger:</h2>
<ul>
<li>Fichier envoyee: <?php echo $_FILES['file']['name'];  ?>
<li>La taile de fichier: <?php echo $_FILES['file']['size'];  ?>
<li>Type de fichier: <?php echo $_FILES['file']['type'];  ?>
</ul>
</body>
</html>
