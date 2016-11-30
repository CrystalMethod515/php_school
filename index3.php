<?php
//Task 3
    $age = 6;
        if ($age <= 7)
        {
            echo "<br>Детский сад<br>";
        }elseif ($age > 7 && $age <= 17)
        {
            echo "<br>Школа<br>";
        }elseif ($age > 17 && $age <= 60)
        {
            echo "<br>Работа<br>";
        }else {
            echo "<br>Пора задуматься о крематории<br>";
        }