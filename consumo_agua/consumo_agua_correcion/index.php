<?php

require_once 'constantes.php';
require_once 'funciones.php';

$message = "";

if (isset($_GET['consumo'])){
    $consumo = $_GET['consumo'];
    
    if($consumo == ""){
        //Si no recibo nada en consumo.
        $message = "Debes introducir una cantidad numérica (float) de consumo.";
    }
    
    else if(!is_numeric($consumo)){
        // Si recibo algo en consumo que no sea un número.
        $message = "Debes introducir una cantidad numérica (float) de consumo.";
    }
    // Si cantidad introducida es negativa.
    else if($consumo<0){
        $message = "No se puede introducir una cantidad negativa en consumo.";
    }
    else{
        $importe = calcularImporteConsumo($consumo);

        $message = "Ha consumido {$consumo} m<sup>3</sup> con un coste de {$importe} €.";
    }
} else {
    $message = "No has introducido ninguna cantidad de consumo.";
}
require_once 'view.inc.php';

