<?php

if($_POST['submit'])
{

    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];
    $p = $_POST['operation'];
    $c;










    if($p=='+')
        $c = $a + $b;
    else if($p=='-')
        $c = $a - $b;
    else if($p=='*')
        $c = $a * $b;
    else if($p=='/')
    {
        if($b==0)
            echo "Невозможно разделить на 0";
        else
            $c = $a / $b;
    }
    else
        $c = pow($a, $b);




    if ($c)
        echo $c;


}


?>