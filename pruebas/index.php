<?php

$nombre = $_POST['nombre'];
$ArrayApellido = $_POST['apellidos'];
$apellidos = "";
$contra = $_POST['contra'];
$fruta = $_POST['fruta'];
$hobbies = "";
$color = $_POST['colores'];
$ArrayHobbies = array();
$correo = $_POST['correo'];
$numero = $_POST['numero'];

if(isset($_POST['hobbies'])){
    $ArrayHobbies = $_POST['hobbies'];
}


for ($i=0; $i < count($ArrayApellido); $i++) { 
    $apellidos .= $ArrayApellido[$i] . " "; 
}

for ($i=0; $i < count($ArrayHobbies); $i++) { 
    $comma = $hobbies != ""?" , ":"";
    $hobbies .= $comma.$ArrayHobbies[$i]; 
}

if($hobbies==""){
    $hobbies="Ninguno.";
}

echo "El nombre es " . $nombre . " y los apellidos son " . $apellidos . " y su contraseña es: " . $contra . " producto elegido " . $fruta . "<br><br>";
echo "Tus hobbies son: " . $hobbies . "<br><br>";
echo "¡Color elegido! " . $color . "<br><br>";
echo "Correo: " . $correo . "<br><br>";
echo "Numero: " . $numero . "<br><br>";
print_r($_FILES['imagen']);

?>