<?php
//Task 6
    $s = [
        'header' => 'header.html',
        'body' => 'body.html',
        'footer' => 'footer.html',
    ];

    foreach ($s as $key => $value)
    {
        echo "$key => $value<br>";
    }
