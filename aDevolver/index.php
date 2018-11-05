<?php
require_once 'constantes.php';
require_once 'funciones.php';

if (isset($_GET['importe']) && isset($_GET['pagado'])){
    $importe = $_GET['importe'];
    $pagado = $_GET['pagado'];
    $devolver = ($pagado-$importe);

    if(empty($importe)){
        $error['importe']['vacio'] = "El importe es un valor vacio.";
    }

    if(empty($pagado)){
        $error['pagado']['vacio'] = "El pagado es un valor vacio.";
    }

    if(!is_numeric($importe)){
        $error['importe']['no_numerico'] = "El importe no es numerico.";
    }

    if(!is_numeric($pagado)){
        $error['pagado']['no_numerico'] = "El a pagar no es numerico";
    }

    if($importe < 0){
        $error['importe']['negativo'] = "El importe es negativo.";
    }

    if($pagado < 0){
        $error['pagado']['negativo'] = "El a pagar es negativo";
    }

    if($importe > $pagado){
        $error['pagado']['suficiente'] = "El a pagar es menor que el importe";
    }
    if(!isset($error)){
        require_once 'data.php';
    }
    else{
        require_once 'error.page.php';
    }
}
else{
    echo("No has introducido los datos necesarios");
}