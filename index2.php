<?php
//Task 2
    const PI_NUMBER = 3.1415;
    define("PI_NUMBER", 3.1415, true);
        if (defined("PI_NUMBER")==true)
    {
        echo "Константа есть<br>";
    }

    const PI_NUMBER = 5;

    echo PI_NUMBER;