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
    background-color: green;;
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
              <td>  <input type="number" name="columns" placeholder="Columns"></td>
    <td><button type="submit" name="button">
        Generer les tableau
    </button></td>

        </tr>
      </table>

    </form>
    <table border="1px" width=800 cellspacing=0 cellpadding=0>
        <?php

        if (isset($_POST["button"])) {

            $userRows = $_POST["rows"];
            $userColumns = $_POST["columns"];

            function multiplicationTable($rows, $columns)
            {
                $zarb = $rows * $columns;
                return $zarb;
            }

            $x = 1;
            while ($x <= $userRows) {

                echo "<tr>";
                $y = 1;
                while ($y <= $userColumns) {
                    if ($x % 2 == 0) {

                        echo "<td class=color1>" . multiplicationTable($x, $y) . "</td>";
                    } else {
                        echo "<td class=color2>" . multiplicationTable($x, $y) . "</td>";
                    }
                    $y++;
                }
                $x++;
                echo "</tr>";

            }
        }
        ?>
    </table>
</body>
  </div>
</html>
