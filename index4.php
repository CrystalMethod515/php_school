<?php
//Task 4
    $age = 9;
    switch ($age)
    {
        case $age <= 7:
            echo "<br>Детский сад<br>";
            break;
        case $age > 7 && $age <= 17:
            echo "<br>Школа<br>";
            break;
        case $age > 17 && $age <= 60:
            echo "<br>Работа<br>";
            break;
        default:
            echo "<br>Пора задуматься о крематории<br>";
            break;
    }