<?php

interface Repostar{
    function reponerCombustible();
}

class Vehiculo{
    private $matricula;
    private $marca;
    private $fecha_compra;

    function __construct(){}

   /*  function __construct($matricula, $marca, $fecha_compra){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->fecha_compra = $fecha_compra;
    } */

    public function getMatricula(){
        return $this->matricula;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getFecha(){
        return $this->fecha_compra;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function setMarca($marca){
        $this->marca = $mmarca;
    }
    
    public function setFecha($fecha_compra){
        $this->fecha_compra = $fecha_compra;
    }

    public function __toString(){
        return $this->matricula . "  ##  " .
               $this->marca . "  ##  " .
               $this->fecha_compra; 
    }
}

class CocheDiesel extends Vehiculo implements Repostar{
    
    function reponerCombustible(){
        echo "Echar Gasolina<br>";
    }
}

class CocheElectrico extends Vehiculo implements Repostar{
    
    function reponerCombustible(){
        echo "Cargar Baterias<br>";
    }
}

$megane = new CocheDiesel();
$tesla = new CocheElectrico();

$parking = [$megane, $tesla];

foreach ($parking as $car){
    $car->reponerCombustible();
}


/* $coche = new Vehiculo("GBY-3454","Renault", "14/05/2015");

echo $coche; */
