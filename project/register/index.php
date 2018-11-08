<?php

if(isset($_POST['register'])){
    // Cargar los datos del formulario
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $password_confirmation = $_POST['pas$password_confirmation'] ?? null;
    
    // Validar los datos
    if(is_null($name) || $name==""){
        $errores['name']['vacio'] = 'El campo nombre esta vacio';
    }

    if(strlen($name)<8){
        $errores['name']['minimo'] = 'El campo nombre debe de tener como minimo 8 caracteres';
    }
    if(!preg_match("/^[0-9 a-z]*$/",$name)){
        $errores['name']['invalido'] = 'El nombre solo puede tener números y letras minusculas';
    }
    if (!preg_match("/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
        $errores['email']['invalido'] = 'El email no es valido';
    }

    if(strlen($password)<6){
        $errores['pass']['minimo'] = 'El campo contraseña debe de tener como minimo 6 caracteres';
    }
    if(!$password==$password_confirmation){
        $errores['pass']['passNoIguales'] = 'La contraseña y la contraseña a confirmar no son iguales';
    }

    if(isset($errores)){
        require_once 'register.view.php';
    }
}else{
    // Mostrar el formulario
    require_once 'register.view.php';
}