<?php
require_once 'helpers.php';

if (isset($_POST['send']) ){
    $name = $_POST['name'];
    $surnames = $_POST['surnames'];
    // $age = (int)$_POST['age'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validar si tenemos todos los campos

    if(empty($name)){
        $error['name']['empty'] = "El nombre es requerido.";
    }

    if(empty($surnames)){
        $error['surnames']['empty'] = "Introduzca al menos un apellido.";
    }

    if(empty($_POST['age'])){
        $error['age']['empty'] = "La edad es requerida.";
    }

    if(empty($email)){
        $error['email']['empty'] = "El emailpass es requerido.";
    }

    if(empty($pass)){
        $error['pass']['empty'] = "La contraseña es requerida.";
    }
    // Validar que el nombre es correcto
    if(!is_string($name) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s]*$/",$name)){
        $error['name']['no_valid'] = "El nombre puede tener letras y espacios.";
    }

    // Validar los apellidos
    if(!is_string($surnames) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s-]*$/",$surnames)){
        $error['surnames']['no_valid'] = "Los apellidos puede tener letras, espacios y guiones.";
    }
    // Validar la edad
    if(!filter_var($_POST['age'], FILTER_VALIDATE_INT)){
        $error['age']['no_valid'] = "La edad debe ser un número entero.";
    }

    // Validar el email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email']['no_valid'] = "Debe introducir un email válido.";
    }
    
    // Validar longitudes de los campos
    if(strlen($name)<3){
        $error['name']['lenght'] = "El nombre debe de tener al menos 3 letras.";
    }
    
    if(strlen($surnames)<3){
        $error['surnames']['lenght'] = "Los apellidos deben de tener al menos 3 letras.";
    }

    if(strlen($pass)<5){
        $error['pass']['lenght'] = "Las contraseñas deben de tener al menos 5 letras.";
    }

    if(!isset($error)){
       require_once 'data.inc.php';
    } else{
        require_once 'form.inc.php';
    }
}else{
    require_once 'form.inc.php';
}


?>