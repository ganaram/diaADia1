<?php

$test = [
[2,7,6],
[9,5,1],
[4,3,8]
];
$dim = count($test);

function sumaFilas(array $test){
    $sonIguales = false;
    for($i =0;$i<$dim);$i++{
        $sumaFila=0;
        for($j=0;$j<$dim;$j++){
            $sumaFila+=$test[$i][$j]
        }
        if($sumaFila)
    }
}

function sumaColumnas(array $test){
    
}

function sumaDiagonal(array $test){
    $suma = 0;
    for($i=0;$i<$dim;$i++){
        $suma += $test[$i][$i];
    }return $suma;
}



function esMagico(array $test){
    $esMagico=false;
    
}