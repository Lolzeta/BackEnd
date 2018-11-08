<?php
// Función que devuelve un mensaje con el importe a pagar, el importe pagado por el cliente, el importe a devolver, y los billetes a dar.
function vuelta($importe, $pagado){
    // La variable será el importe a devolver, el resto del importe y el pagado
    $devolver = $pagado-$importe;
    $mensaje = "Importe a pagar: <br />" .
    // El importe, con dos numeros decimales
    number_format($importe,2) . " €<br />" .
    "Importe pagado por el cliente: <br />" .
    // El a pagar con dos numeros decimales
    number_format($pagado,2) . " €<br />" .
    "Importe a devolver:<br />" .
    // El devolver con dos numeros decimales, y con la sustitución de puntos por comas.
    number_format($devolver, 2, ",", ".") . " €<br />" .
    "Billetes a dar:<br />";
    // Array de billetes
    $billetera = [
        500, 200, 100, 50, 20, 10 , 5
    ];
    // Array de monedas
    $monedero = [    
        '2 €' => 2,
        '1 €' => 1,
        '50 céntimos' => 0.50,
        '20 céntimos' => 0.20,
        '10 céntimos' => 0.10,
        '5 céntimos' => 0.05,
        '2 céntimos' => 0.02,
        '1 céntimo' => 0.01
    ];

    // Foreach que toma los valores de el array de billetes
    foreach ($billetera as $billete) {
        // Contador de billetes que nos dará los billetes que tenemos.
        $countBillete = 0;
        // Mientras el devolver sea mayor o igual que el billete (cual esta ordenado de mayor a menor) entrara en el bucle y contará los billetes
        // y restará el valor, hasta salir del bucle.
        while($devolver >= $billete){
        $countBillete++;
        $devolver -= $billete;
        }
        // Si el count es 0, no entrará
        if($countBillete > 0){
            // Si es mayor que uno, imprimira este mensaje
            if($countBillete > 1){
                $mensaje .= "<br/> $countBillete Billetes de $billete €"; 
            // Si es menor que uno, imprimira este mensaje.
            } else{
                $mensaje .= "<br/> $countBillete Billete de $billete €"; 
            }
        } 
    }
    // Foreach que toma los valores de el array de monedas
    foreach($monedero as $moneda => $valor){
        // Contador de monedas que nos dará los monedas que tenemos y su valor y redondeamos el valor para que de un valor logico.
        $devolver = round($devolver,2);
        $countMoneda = 0;
        // Mientras el devolver sea mayor o igual que la moneda (cual esta ordenado de mayor a menor) entrara en el bucle y contará las monedas
        // y restará el valor, hasta salir del bucle.
        while($devolver >= $moneda){
        $countMoneda++;
        $devolver -= $moneda;
        }
        // Si el count es 0, no entrará
        if($countMoneda > 0){
            // Si es mayor que uno, imprimira este mensaje
            if($countMoneda > 1){
                $mensaje .= "<br/> $countMoneda Monedas de $moneda"; 
            // Si es menor que uno, imprimira este mensaje.
            } else{
                $mensaje .= "<br/> $countMoneda Monedas de $moneda"; 
            }
        } 
    }
    // Devuelve el mensaje
    return $mensaje;
} 
?>