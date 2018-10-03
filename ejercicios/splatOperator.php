<?php 

// Ejercicio en el que tenemos que imprimir maximo, minimo y media de un array.

function mediaMaxMin(...$notas){
    $suma = 0;
    $max = PHP_INT_MIN;
    $min = PHP_INT_MAX;
    foreach ($notas as $nota) {
        $suma += $nota;
        if($nota > $max){
            $max = $nota;
        }
        if($nota < $min){
            $min = $nota;
        }
    }
    $media = $suma/count($notas);

    echo "Max = " . $max . "<br>";
    echo "Min = " . $min . "<br>";
    echo "Media = " . $media;
}

mediaMaxMin(5,1,8,6,10);