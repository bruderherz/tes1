<?php
require 'fonctions.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <form method="post">
    <table align="center">

        <tr>
            <td>Entre 1eme Nombre</td>
            <td><input type="text" name="numero1"></td>
        </tr>

        <tr>
            <td>Entre 2eme Nombre</td>
            <td><input type="text" name="numero2"></td>
        </tr>

        <tr>
            <td>Selection Opration</td>
            <td><select name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select></td>

        </tr>
    <tr>
      <td></td>
      <td><input type="readonly" value="<?php echo $result; ?>">  </td>
    </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Resultat"></td>

        </tr>

    </table>
    </form>
  </body>
</html>
