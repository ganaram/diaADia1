<?php

require_once 'constantes.php';
require_once 'funciones.php';

$message="";

if(isset($_GET['consumo'])){
    $consumo =$_GET['consumo'];

    if($consumo==""){
        $message="Error1: Debes introducir una cantidad numérica de consumo.";
    }else if(!is_numeric($consumo)){
        $message = "Error2: Debes introducir na cantidad numérica de consumo.";
    }else if($consumo<=0){
        $message = "Error3: No se puede introducir una cantidad negativa de consumo";
    }else{
        $importe = calcularImporteConsumo($consumo);
        $message = "Ha consumido {$consumo} m<sup>3</sup> con un coste de {$importe}€.";
    }
}

require_once 'view.inc.php';