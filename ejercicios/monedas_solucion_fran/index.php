<?php

$importe = $_GET['importe'];
$pagado = $_GET['pagado'];

//validar

//comprobar importe menor que pagado

//devolucion

$devolver = $pagado-$importe;

echo "Importe: " . $importe . "<br>"; 
echo "Pagado: " . $pagado . "<br>"; 
echo "Vuelta: " . $devolver . "<br>"; 

//separo partes enteras y centimos

$entera = floor($devolver);
$decimal = $decimal - $devolver;

echo "Entero: " . $entera . "<br>"; 
echo "Decimal: " . $decimal . "<br>"; 

if($entera >=500){
    $billetes500 = intdiv($entera,500);
    $entera = $entera-$billetes500*500;
    echo $billetes500 . " billetes de 500€<br>";
}
if($entera >=200){
    $billetes200 = intdiv($entera,200);
    $entera = $entera-$billetes200*200;
    echo $billetes200 . " billetes de 200€<br>";
}
if($entera >=100){
    $billetes100 = intdiv($entera,100);
    $entera = $entera-$billetes100*100;
    echo $billetes100 . " billetes de 100€<br>";
}
if($entera >=50){
    $billetes50 = intdiv($entera,50);
    $entera = $entera-$billetes50*50;
    echo $billetes50 . " billetes de 50€<br>";
}
if($entera >=20){
    $billetes20 = intdiv($entera,20);
    $entera = $entera-$billetes500*200;
    echo $billetes20 . " billetes de 20€<br>";
}
if($entera >=10){
    $billetes10 = intdiv($entera,10);
    $entera = $entera-$billetes10*10;
    echo $billetes10 . " billetes de 10€<br>";
}
if($entera >=5){
    $billetes5 = intdiv($entera,5);
    $entera = $entera-$billetes5*5;
    echo $billetes5 . " billetes de 5€<br>";
}
if($entera >=2){
    $monedas2 = intdiv($entera,2);
    $entera = $entera-$monedas2*2;
    echo $monedas2 . " monedas de 2€<br>";
}
if($entera >=1){
    $monedas1 = intdiv($entera,1);
    $entera = $entera-$monedas1*1;
    echo $monedas1 . " monedas de 1€<br>";
}

$decimal = intval($decimal*100);

if($decimal >=50){
    $monedas50c = intdiv($decimal,50);
    $decimal = $decimal-$monedas50c*50;
    echo $monedas50c . " billetes de 50cents<br>";
}
if($decimal >=20){
    $monedas20c = intdiv($decimal,20);
    $decimal = $decimal-$monedas20c*20;
    echo $monedas20c . " monedas de 20cents<br>";
}
if($decimal >=10){
    $monedas10c = intdiv($decimal,10);
    $decimal = $decimal-$monedas10c*10;
    echo $monedas10c . " monedas de 10cents<br>";
}
if($decimal >=5){
    $monecas5c = intdiv($decimal,5);
    $decimal = $decimal-$monecas5c*5;
    echo $monecas5c . " monedas de 5cents<br>";
}
if($decimal >=2){
    $monedas2c = intdiv($decimal,2);
    $decimal = $decimal-$monedas2c*2;
    echo $monedas2 . " monedas de 2cents<br>";
}
if($decimal >=1){
    $monedas1c = intdiv($decimal,1);
    $decimal = $decimal-$monedas1c*1;
    echo $monedas1c . " monedas de 1cent<br>";
}

/**
 * foreach ($monedas as $key =>value){
 * if($devolver >=$key){
 * $moneda = bcdiv($devolver,$key);
 * $devolver = round ($devolver - $moneda * $key,2);
 * $salida .= $moneda . " " . $value . ($moneda>1?"s":"") . " de " . $key . "€<br>";
 * }
 * }
 */