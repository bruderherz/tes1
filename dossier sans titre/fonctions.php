<?php
$result = "";
class calculator
{
    var $x;
    var $y;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->x + $this->y;
            break;

            case '-':
            return $this->x - $this->y;
            break;

            case '*':
            return $this->x * $this->y;
            break;

            case '/':
            return $this->x / $this->y;
            break;

            default:
            return "Desolee erreur de choix";
        }
    }
    function getresult($x, $y, $r)
    {
        $this->x = $x;
        $this->y = $y;
        return $this->checkopration($r);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['numero1'],$_POST['numero2'],$_POST['op']);
}
 ?>
