<?php
ini_set('max_execution_time',300);

$array = [];
$arrayFinal = [];
$dim = $_GET['dim'];

$start = microtime(true);
for ($i=0; $i < $dim*$dim ; $i++) { 
    $array[$i] = $i+1;
}


for ($i=0; $i < $dim; $i++) { 
    for ($j=0; $j < $dim; $j++) {
        $number = rand(0,count($array)-1);
        $arrayFinal[$i][$j] = $array[$number];
        echo $arrayFinal[$i][$j] . " ";
        unset($array[$number]);
        $array = array_values($array);
    }
    echo "<br>";
}
$end = microtime(true);

$time = $end - $start;

echo "<br><br> Dimension: " . $dim;
echo "<br> La carga ha tardado " . $time;

