<?php

if(isset($_POST['form_alta'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $extranjero = (isset($_POST['extranjero'])?"Si":"No");

    // Se han introducido todos los campos

    if(empty($nombre)){
        $error['nombre'] = ['campo_vacio' => 'El campo nombre es obligatorio'];
    }

    if(empty($apellidos)){
        $error['apellidos'] = ['campo_vacio' => 'El campo apellidos es obligatorio'];
    }

    if(empty($edad)){
        $error['edad'] = ['campo_vacio' => 'El campo edad es obligatorio'];
    }

    if(empty($email)){
        $error['email'] = ['campo_vacio' => 'El campo email es obligatorio'];
    }

    if(empty($sexo)){
        $error['sexo'] = ['campo_vacio' => 'El campo sexo es obligatorio'];
    }

    // Validaciones
    if(!preg_match("/[a-zA-Z áéíóú]+/",$nombre)){
        echo "El campo nombre solo acepta letras mayúsculas, minusculas, con tilde y espacios.";
    } 
    require_once 'form_sended.inc.php';

}else {
require_once('form.inc.php');
}
?>