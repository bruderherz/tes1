<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style media="screen">
  .color1{
    background-color: red;
  }
  .color2{
    background-color: green;
  }
</style>
</head>
<body>
  <div>

    <form method="post">
      <table >
        <tr>
          <td>Nombre de ligne:</td>
            <td><input type="number" name="rows" ></td>
            <td>Nombre de colones:</td>
              <td>  <input type="number" name="columns"></td>
    <td><button type="submit" name="button">
        Generer les tableau
    </button></td>

        </tr>
      </table>

    </form>
    <table border="1px" width=800 cellspacing=0 cellpadding=0>
        <?php
          require 'fonction_multiplication.php';
        ?>
    </table>
</body>
  </div>
</html>
