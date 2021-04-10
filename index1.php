<?php
// function to calculate and return result
function calculate($x, $y, $op) {
    // calculate $prod using switch (case) statement
    switch($op1) {
        case '+':
            $prod1 = $x + $y;
            break;
        case '-':
            $prod1 = $x - $y;
            break;
        case '*':
            $prod1 = $x * $y;
            break;
        case '/':
            if ($y == 0) {$prod1 = "&#8734";}
            else {$prod1 = $x / $y;}
    // return the result
    return $prod1;
    }
}
function calculate2($prod1, $z, $op2) {
    // calculate $prod2 using switch (case) statement
        switch($op2) {
        case '+':
            $prod2 = $prod1 + $z;
            break;
        case '-':
            $prod2 = $prod1 - $z;
            break;
        case '*':
            $prod2 = $prod1 * $z;
            break;
        case '/':
            if ($z == 0) {$prod2 = "&#8734";}
            else {$prod2 = $prod1 / $z;}
    }
    // return the result
    return $prod2;
}
function calculate3($x, $prod2, $op1) {
    // calculate $prod using switch (case) statement
        switch($op2) {
        case '+':
            $prod2 = $x + $prod1;
            break;
        case '-':
            $prod2 = $x - $prod1;
    }
    // return the result
    return $prod3;
}
function calculate4($y, $z, $op2) {
    // calculate $prod using switch (case) statement
        switch($op2) {
        case '*':
            $prod2 = $y * $z;
            break;
        case '/':
            if ($z == 0) {$prod2 = "&#8734";}
            else {$prod2 = $y / $z;}
    }
    // return the result
    return $prod2;
}
// declare all variables
$x = 0;
$y = 0;
$z = 0;
$prod1 = 0;
$prod2 = 0;
$prod3 = 0;
$op1 = '';
$op2 = '';


// grab the form values from $_GET hash
extract($_GET);

?>

  <html>

  <head>
    <title>PHP Calculator Version 2.12</title>
  </head>

  <body>

    <h3>PHP Calculator (Version 2.12)</h3>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      x = <input type="text" name="x" size="5" value="<?php print $x; ?>" /> op1 =
      <select name="op">
                <option value="+" <?php if ($op=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op=='/') echo 'selected="selected"';?>>/</option>
            </select> y = <input type="text" name="y" size="5" value="<?php  print $y; ?>" /> op2 =
      <select name="op2">
                <option value="+" <?php if ($op2=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op2=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op2=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op2=='/') echo 'selected="selected"';?>>/</option>
            </select> z = <input type="text" name="z" size="5" value="<?php print $z; ?>" />
      <input type="submit" name="calc" value="Calculate" />
    </form>

    <?php
        if(isset($calc)) {
            // check that $x & $y are numeric
            if (is_numeric($x) && is_numeric($y) && is_numeric($z)) {
                // check PEMDAS
                if ($op1 == '*' or '/') {
                    $prod1 = calculate($x, $y, $op1);
                    $prod2 = calculate2($prod1, $z, $op2);
                }
                else if ($op2 == '*' or '/') {
                     $prod2 = calculate4($y, $z, $op2);
                     $prod3 = calculate3($x, $prod2, $op1);
                }
                else
                    $prod1 = calculate($x, $y, $op1);
                    $prod2 = calculate2($prod1, $z, $op2);

                // print the result
                echo "<p>$x $op $y $op2 $z = $prod2 </p>";
            }
            else {
                // unaccepatable values
                echo "<p>x, y, and z values are required to be numeric ...
                         please re-enter values</p>";
            }
        }
    ?>
  </body>

  </html>
