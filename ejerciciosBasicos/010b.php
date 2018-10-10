<?php
$dim = $_GET['dim'];

$array = [];
$start = microtime(true);
$numeros = range(1,$dim*$dim);
shuffle($numeros);


$k=0;
for ($i=0; $i < $dim ; $i++) { 
    for ($j=0; $j < $dim ; $j++) { 
        $array[$i][$j] = $numeros[$k++];
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

$end = microtime(true);

$time = $end - $start;

echo "<br><br> Dimension: " . $dim;
echo "<br> La carga ha tardado " . $time;

