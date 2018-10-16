<?php

//Recibimos las constantes y las funciones de otros archivos.
//Si cambiamos el orden no se ejecutará, pues la función
//depende de varias de las constantes declaradas.

require_once 'constantes.php';
require_once 'funciones.php';

//Declaramos una variable mensaje vacía que se modificará ahora.

$message="";

//Comprobamos que el usuario haya introducido una cantidad de consumo en la URL.

if(isset($_GET['consumo'])){
    
    //Declaramos la varible consumo recibiendola por GET.
    
    $consumo =$_GET['consumo'];

    if($consumo==""){
        //Damos valor al mensaje como el primer error.
        $message="Error1: Debes introducir una cantidad numérica de consumo.";
    }else if(!is_numeric($consumo)){
        //Damos valor al mensaje como el segundo error.
        $message = "Error2: Debes introducir na cantidad numérica de consumo.";
    }else if($consumo<=0){
        //Damos valor al mensaje como el tercer error.
        $message = "Error3: No se puede introducir una cantidad negativa de consumo";
    }else{
        //Ejecutamos la función y damos el resultado por el mensaje.
        $importe = calcularImporteConsumo($consumo);
        $message = "Ha consumido {$consumo} m<sup>3</sup> con un coste de {$importe}€.";
    }
}else{
    //Damos valor al mensaje como error0, sin datos introducidos.
    $message = "Error0: Usted no ha introducido datos, añada ?consumo=cantidad a la URL.";
}

require_once 'view.inc.php';
