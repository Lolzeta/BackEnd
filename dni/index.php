<?php
$dni = "";
$letra = "";
$estado = "";

if(!empty($_POST)){
    $dni = $_POST['dni'];
    function calcularLetraDNI($dni){
        global $letra;
        global $estado;
        if($dni==""){
                $estado = "No se ha introducido ningún valor";
        }
        else if(intval($dni)==0){
            $estado = "El DNI no es un numero";
        }else if($dni<1000000 || $dni>100000000){
            $estado = "Fuera de rango";
        }
        else{
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $valor = $dni % 23;
    $letra = substr($letras, $valor, 1);
        }
    }
    $estado = "¡Todo correcto!";
    calcularLetraDNI($dni);
}

require_once 'formulario.php';
?>