<?php
require_once 'main.php';

// Introducimos una página simple, dando instrucciones al usuario.

echo '<hr>';

$error = 'Usted ha introducido un dato erróneo, revise las indicaciones y cambie la cifra.';

// Declaramos una variable "error", la cual se imprimirá siempre que se introduzca un dato incorrecto.

if(empty($_GET)){
    echo 'Usted no ha introducido ningún dato.<br><br> Añada <b>"?consumo=cifra"</b> a la URL.';
    die;
}else if($_GET['consumo']<=0){
    echo $error;
    die;
}else if(!is_numeric($_GET['consumo'])){
    echo $error;
    die;
}

// Comprobamos la validez del dato, en caso de que sea inválida, cesamos la ejecución.

$consumo = $_GET['consumo'];
$coste;
$costeRango1 = 15;
$costeRango2 = 95;
$costerango3 = 270;

// Declaramos la variable, recibiéndola mediante GET. Además declaramos la variable coste, que 
// almacenará el coste total del consumo de agua.

// $coste = (($consumo <= 100) ? $consumo*0.15 : 
//             ( ($consumo<=500) ? (($consumo-100)*0.2)+$costeRango1 : 
//                 (($consumo<=1000) ? (($consumo-500)*0.35)+$costeRango2 : (($consumo-1000)*0.8)+$costerango3)));

// var_dump($coste);
// die();
// No he llegado a solucionar el problema con el operador ternario, no recoge el rango de los 
// primeros 228 números y directamente salta al rango de más de 1000.

if($consumo<=100){
    $coste = $consumo*0.15;
}else if($consumo<=500){
    $coste =(($consumo-100)*0.2)+$costeRango1;
}else if($consumo<=1000){
    $coste=(($consumo-500)*0.35)+$costeRango2;
}else if($consumo>1000){
    $coste = (($consumo-1000)*0.8)+$costerango3;
}

echo 'Ha consumido ' . $consumo . ' m³ de agua con un coste de ' . $coste . ' €.';

