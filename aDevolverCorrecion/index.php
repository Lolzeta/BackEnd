<?php

$importe = $_GET['importe'];
$pagado = $_GET['pagado'];

// Validar datos

// Comprobar que el importe es menorque lo pagado

// Calcular devolución

$devolver = $pagado - $importe;

echo "Importe: $importe"."</br>";
echo "Pagado: $pagado"."</br>";
echo "Devolver: $devolver"."</br>";

$monedas = [
    "500" => "billete",
    "200" => "billete",
    "100" => "billete",
    "50" => "billete",
    "20" => "billete",
    "10" => "billete",
    "5" => "billete",
    "2" => "moneda",
    "1" => "moneda",
    "0.50" => "moneda",
    "0.20" => "moneda",
    "0.10" => "moneda",
    "0.05" => "moneda",
    "0.02" => "moneda",
    "0.01" => "moneda",
];

$salida = ""; // Resultado

foreach ($monedas as $key => $value){
    if($devolver >= $key){
        $moneda = bcdiv($devolver, $key);
        $devolver = round($devolver - $moneda * $key, 2);
        $salida .= $moneda . " " . $value . ($moneda>1?"s":"") . " de " . $key . "€<br>";
    }
}
echo $salida;