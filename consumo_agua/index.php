<?php
// El programa trata de introducir un consumo de agua en metros cubicos. Los primeros 100 metros cubicos
// valdrán 0'15, de 100 a 500 valdrán 0'20, de 500 a 1000 valdra 0'35 y mas de 1000 valdra 0'80 cada metro cubico
// Un ejemplo sería que tengamos 750 metros cubicos, y el valor sería 182.5€, usando la siguiente formula
// 100*0'15+400*0'20+250*0.35 = 182.5€. A continuación, el programa.

// Recogida del consumo por GET.
$consumo = $_GET['consumo'];


// Comprobación de si el valor introducido es un numero
if(!is_numeric($consumo)){
    echo "El valor no es numerico.";
}

// Comprobacion de si se envia el valor en blanco
else if($consumo==""){
    echo "El valor esta en blanco.";
}

// Comprobacion de si el numero es negativo 
else if($consumo<0){
    echo "El valor es negativo.";
}

// Comprobacion de si el numero es 0
else if($consumo==0){
    echo "El valor es cero.";
}

// Comprobaciones del valor del consumo y asignación del susodicho valor por el consumo de agua, junto un mensaje
// que se mostrará por pantalla.
else{
    $aPagar = 0;
    if($consumo<=100){
        $aPagar = ($consumo * 0.15);
    }
    if($consumo > 100 && $consumo<=500){
        $aPagar = (100 * 0.15) + (($consumo-100) * 0.20);
    }
    if($consumo > 500 && $consumo<=1000){
        $aPagar = (100 * 0.15) + (400 * 0.20) + (($consumo-500) * 0.35);
    }
    if($consumo>1000){
        $aPagar = (100 * 0.15) + (400 * 0.20) + (500 * 0.35) + (($consumo-1000) * 0.80);
    }
    echo "Ha consumido " . $consumo . " m³ de agua con un coste de " . $aPagar . " €.";
}