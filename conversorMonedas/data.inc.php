<?php
require_once 'monedas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio.</title>
</head>
<body>
    <b>El cambio es de: <?=cambioMoneda($_POST['cantidad'], $_POST['moneda1'], $_POST['moneda2'])?></b>
</body>
</html>

