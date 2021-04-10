<html>
   <head>
     <title>PHP Calculator Version 2.12</title>
   </head>
   <body>
<?php
function calculate($x, $y, $op) {
    switch($op) {
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            if ($y == 0) {
                $result = "&#8734";
            } else {
                $result = $x / $y;
            }
    }
    return $result;
}

extract($_REQUEST);

$x = calculate($x, $y, $op);
?>
   <body>
    <form method="get"">
      x = <input type="text" name="x" size="5" value="<?php print $x; ?>" /><br />

      y = <input type="text" name="y" size="5" value="<?php  print $y; ?>" /><br />
      op = <select name="op">
        <option value="+" <?php if ($op === '+') { echo 'selected="selected"'; } ?>>+</option>
        <option value="-" <?php if ($op === '-') { echo 'selected="selected"'; } ?>>-</option>
        <option value="*" <?php if ($op === '*') { echo 'selected="selected"'; } ?>>*</option>
        <option value="/" <?php if ($op === '/') { echo 'selected="selected"'; } ?>>/</option>
      </select><br />

      <input type="submit" name="calc" value="Calculate" /><br />
    </form>
  </body>
</html>
