<?php

function kmsToUA($kilometros){
   return $kilometros/149600000;
}

function kmsToLightYear($distance){
    return $distance/9460000000000;
}

echo "Unidades Astronomicas: " . kmsToUA(4504300000) . "<br>";
echo "Años Luz: " . kmsToLightYear(4504300000) . "<br>";