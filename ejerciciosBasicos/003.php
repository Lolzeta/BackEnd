<?php
$numerosDeseados = 15;
$count = 0;
$numero = 2;

echo "Los " . $numerosDeseados . " primeros numeros primos.<br>";
echo 1 . "<br>";
echo 2 . "<br>";

 while ($count < $numerosDeseados-2) {
     $numero++;
     $esPrimo = true;
     for ($i = 2;$i <= ceil(sqrt($numero)); $i++){
         if($numero%$i == 0) {
             $esPrimo = false;
             break;
         }
     }
     if ($esPrimo){
         echo $numero . "<br>";
         $count++;
     }
 }
?>