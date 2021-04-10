<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2:</title>
  </head><body> <table border="1"> <tbody> <tr> <td>
<table border="1">
  <tr>
    <td>  Nombre de ligne :</td>
      <td><input type="text" value="12"></td>
      <td>  Nombre de Colones :</td>
        <td><input type="text" value="12"></td>
        <td style="width: 199px; text-align:center;"><label value="Generer les tableau">Generer les tableau</label></td>

  <?php

$m = 13;

$tm = array();
for ($i=1; $i<$m; $i++) {
	for ($j=1; $j<$m; $j++) {
		$tm[$i][$j]=($i*$j);
	}
}
echo '<table border=1 width=800 cellspacing=0 cellpadding=0><tbody>';
for ($i=1; $i<$m; $i++) {
	echo '<tr>';
	for ($j=1; $j<$m; $j++) {
	    echo '<td style="text-align:center">'
                 .$tm[$i][$j]
                 .'</td>';
	}
	echo '</tr>';
}
echo '</tbody></table>';


?>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>
