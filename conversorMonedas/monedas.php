<?php

// Cambio euro

$moneda['euro']['us'] = 1.15800;
$moneda['euro']['can'] = 1.50077;
$moneda['euro']['libra'] = 0.87830;
$moneda['euro']['yen'] = 129.83;
$moneda['euro']['rublo'] = 75.7626;
$moneda['euro']['pesos'] = 42.2467;

// Cambio dolar us

$moneda['us']['euro'] = 0.86345;
$moneda['us']['can'] = 1,29600;
$moneda['us']['libra'] = 0.75844;
$moneda['us']['yen'] = 112.11;
$moneda['us']['rublo'] = 65.4254;
$moneda['us']['pesos'] = 36.4824;

<<<<<<< HEAD
// Cambio libra

$moneda['libra']['euro'] = 1,13414;
$moneda['libra']['us'] = 1,30624;
$moneda['libra']['can'] = 1,71125;
$moneda['libra']['yen'] = 146,98;
$moneda['libra']['rublo'] = 85,5452;
$moneda['libra']['pesos'] = 47,7543;

// Cambio dolar canadiense

$moneda['can']['euro'] = 0,66225;
$moneda['can']['us'] = 0,76279;
$moneda['can']['libra'] = 
=======
// Cambio dolar can

$moneda['can']['us'] = 0,76290;
$moneda['can']['euro'] = 0,66884;
$moneda['can']['libra'] = 0,59431;
$moneda['can']['yen'] = 85,34;
$moneda['can']['rublo'] = 50,0446;
$moneda['can']['pesos'] = 28,0278;

// Cambio libra inglesa

$moneda['libra']['us'] = 1,28277;
$moneda['libra']['euro'] = 1,12458;
$moneda['libra']['can'] = 1,68016;
$moneda['libra']['yen'] = 143,48;
$moneda['libra']['rublo'] = 84,1471;
$moneda['libra']['pesos'] = 47,1270;

// Cambio yen

$moneda['yen']['us'] = 0,00894;
$moneda['yen']['euro'] = 0,00783;
$moneda['yen']['can'] = 0,01170;
$moneda['yen']['libra'] = 0,00696;
$moneda['yen']['rublo'] = 0,58614;
$moneda['yen']['pesos'] = 0,32827;

// Cambio rublo

$moneda['rublo']['us'] = 0,01524;
$moneda['rublo']['euro'] = 0,01336;
$moneda['rublo']['can'] = 0,01996;
$moneda['rublo']['libra'] = 0,01187;
$moneda['rublo']['yen'] = 1,70;
$moneda['rublo']['pesos'] = 0,55980;

// Cambio pesos

$moneda['pesos']['us'] = 0,02721;
$moneda['pesos']['euro'] = 0,02386;
$moneda['pesos']['can'] = 0,03564;
$moneda['pesos']['libra'] = 0,02120;
$moneda['pesos']['yen'] = 3,04;
$moneda['pesos']['rublo'] = 1,78517;

function cambioMoneda($cantidad, $moneda1, $moneda2){
    return $cantidad * $moneda[$moneda1][$moneda2];
}

?>
>>>>>>> 394e4e2e23f21e7921038f413a59682ec2ce8271
