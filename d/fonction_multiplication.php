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
