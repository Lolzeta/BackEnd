<?php

function devolverMMM(...$nums){
    $min = PHP_INT_MAX;
    $media = 0;
    $max = PHP_INT_MIN;
    $count = count($nums);

    foreach ($nums as $num){
        $media += $num;
        if ($num > $max) $max = $num;
        if ($num < $min)$min = $num;
    }
    echo "Media: " . round($media/$count) ."<br> Maximo: $max <br> Minimo: $min";
}

$datos = [3,10,1,5,6];

echo devolverMMM(...$datos) . "<br><br><br>";
echo devolverMMM(3,5,2,10,3,7,9);