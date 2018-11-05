<?php
function billetes($importe){
    while($importe>0){
        if ($importe<DOS_CENTIMOS) {
            $importe-0.01;
        }
        else if($importe<CINCO_CENTIMOS && $importe>UN_CENTIMO){
            $importe-0.02;
        }
        else if($importe<DIEZ_CENTIMOS && $importe>DOS_CENTIMOS){
            $importe-0.05;
        }
        else if($importe<VEINTE_CENTIMOS && $importe>CINCO_CENTIMOS){
            $importe-0.10;
        }
        else if($importe<CINCUENTA_CENTIMOS && $importe>DIEZ_CENTIMOS){
            $importe-0.20;
        }
        else if($importe<UN_EURO && $importe>VEINTE_CENTIMOS){
            $importe-0.50;
        }
        else if($importe<DOS_EUROS && $importe>CINCUENTA_CENTIMOS){
            $importe-1;
        }
        else if($importe<CINCO_EUROS && $importe>UN_EURO){
            $importe-2;
        }
        else if($importe<DIEZ_EUROS && $importe>DOS_EUROS){
            $importe-5;
        }
        else if($importe<VEINTE_EUROS && $importe>CINCO_EUROS){
            $importe-10;
        }
        else if($importe<CINCUENTA_EUROS && $importe>DIEZ_EUROS){
            $importe-20;
        }
        else if($importe<CIEN_EUROS && $importe>VEINTE_EUROS){
            $importe-50;
        }
        else if($importe<DOSCIENTOS_EUROS && $importe>CINCUENTA_EUROS){
            $importe-100;
        }
        else if($importe<QUINIENTOS_EUROS && $importe>CIEN_EUROS){
            $importe-200;
        }
        else{
            $importe-500;
        }
    }
    return $importe;
}