<?php
function calcularImporteConsumo($consumo){

    /**
     * Función que calcular el importe de ubn consumo de agua en 
     * metros cubicos
     * @param $consumo Consumo de agua en metros cúbicos
     * 
     * @return float Importa en euros del consumo de agua.
     */
    if($consumo < 100){
        // Importe menor que FRANJA1
        $importe = $consumo * IMPORTE_MENOR_FRANJA1;
    } else if ($consumo <= FRANJA2){
        // Importe menor que FRANJA2
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 + 
        ($consumo - FRANJA1) * IMPORTE_MENOR_FRANJA2;
    } else if($consumo <= FRANJA3){
        // Importe menor que FRANJA3
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 +
         (FRANJA2 - FRANJA1) * IMPORTE_MENOR_FRANJA2 + 
        ($consumo - FRANJA2) * IMPORTE_MENOR_FRANJA3;
    } else{
        // Importes mayores que FRANJA3
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 +
         (FRANJA2 - FRANJA1) * IMPORTE_MENOR_FRANJA2 + 
        (FRANJA3 - FRANJA2) * IMPORTE_MENOR_FRANJA3 + 
        ($consumo - FRANJA3) * IMPORTE_MENOR_FRANJA3;
    }
    return $importe;
}