<?php

function suma(...$nums){
    $suma = 0;

    foreach($nums as $num){
        $suma += $num;
    }
    echo $suma . "<br>";
}

function mult($first, $second){
    return $first * $second;
}

$datos = [100,200];

echo mult(...$datos) . "<br><br>";

suma (3);
suma (10,12);
suma (13,14,15);
suma (3,10,12,1);
suma (4,5,20,13,1);