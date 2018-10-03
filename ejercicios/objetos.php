<?php

interface Repostar{
    function echarGasolina();
    function cargarBaterias();
}

class Vehicle{

    public $matricula;
    public $marca;
    public $fecha_compra;

    function __construct($matricula, $marca, $fecha_compra){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->fecha_compra = $fecha_compra;
    } 

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
}

class Coche extends Vehicle implements Repostar{
    function reponerCombustible(){
        echo "Echar Gasolina<br>";
    }
}

class CocheElectrico extends Vehicle implements Repostar{
    function reponerCombustible(){
        echo "Cargar baterías<br>";
    }
}

$megane = new Coche;
$tesla = new CocheElectrico;

$parking = [$megane,$tesla];

foreach($parking as $car){
    $car->reponerCombustible();
}