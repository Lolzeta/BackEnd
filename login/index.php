<?php

if(isset($_POST['send'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Comprobaciones de lineas vacias

    if(empty($username)){
        $error['username']['empty'] = "El campo usuario esta vacio.";
    }

    if(empty($pass)){
        $error['pass']['empty'] = "El campo contraseña esta vacio.";
    }

    // Comprobacion nombre patron

    if(!is_string($username) || !preg_match("/^[0-9 a-z A-Z\_]*$/",$username)){
        $error['username']['no_valid'] = "El campo usuario solo acepta numeros, letras y guiones bajos";
    }

    // Comprobacion contraseña patron
    if(!preg_match(
        "/^(?=(.*?[A-Z]){3})(?=(.*?[a-z]){3})(?=(.*?\d){3})[0-9a-zA-Z]{9,}$/",$pass)){
        $error['pass']['no_valid'] = "El campo contraseña debe de tener como minimo tres numeros, tres letras minusculas y tres letras mayusculas";
    }
    

    // Comprobacion longitudes

    if(strlen($username) < 5){
        $error['username']['lenght'] = "El usuario no puede tener menos de cinco letras";
    }

    if(strlen($pass) < 9){
        $error['pass']['lenght'] = "La contraseña no puede tener menos de ocho letras";
    }

    if(!isset($error)){
        require_once('data.inc.php');
    }
    else{
        require_once('form.inc.php');
    }
} else{
    require_once('form.inc.php');
}



?>