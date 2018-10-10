<?php

$cuadrado = [
    [2,7,6],
    [9,5,1],
    [4,3,8]
];

function esMagico($cuadrix){
    $esMagico = true;
    $comprobar = 0;
    $sumaDiag = 0;
    for ($i=0; $i < count($cuadrix) ; $i++) { 
        $comprobar += $cuadrix[$i][$i];
    }

    for($i=0; $i < count($cuadrix) ; $i++){
        $sumaF = 0;
        for($k=0; $k < count($cuadrix[$i]) ; $k++){
            $sumaF += $cuadrix[$i][$k];
        }
        if($sumaF!=$comprobar){
            $esMagico = false;
        }
    }

    for($i=0; $i < count($cuadrix) ; $i++){
        $sumaL = 0;
        for($k = 0; $k < count($cuadrix[$i]) ;$k++){
            $sumaL += $cuadrix[$k][$i];
        }
        if($sumaL!=$comprobar){
            $esMagico = false;
        }
    }
    for($k=count($cuadrix)-1; $k >=0; $k--){
        $sumaDiag += $cuadrix[$k][$k];
    }
    if($sumaDiag!=$comprobar){
        $esMagico = false;
    }
    if($esMagico){
        return "Es un cuadrado mágico";
    }
    return "No es un cuadrado mágico";
}

echo esMagico($cuadrado);