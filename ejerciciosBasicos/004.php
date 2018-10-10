<?php

// Solucion iterativa
function factorial ($numero){
    $resultado = 1;
    for ($i=$numero; $i>1 ; $i--) { 
        $resultado *= $i;
    }
    return $resultado;
}

// Solucion recursiva

function factorialRec($num){
    if($num==1){
        return 1;
    }
        return $num * factorialRec($num-1);
}

function fibonacci($num){
    if($num<=2){
        return 1;
    }
    return fibonacci($num-1) + fibonacci($num-2);
}

echo "Factorial solucion iterativa: " . factorial(5) . "<br>" . "Factorial solucion recursiva: " . factorialRec(7) . "<br><br>";

echo "Fibonnaci con solución recursiva: " . fibonacci(7);