<?php

//Script que crea array cuadrado de dos dinemsniones con numeros enteros aleatorios
// entre 1 y 100, la dimension se recibe por GET.

$dim = $_GET['dim'];
$arr = array();
    for($i = 0;$i<$dim;$i++){
        for($j =0;$j<$dim;$j++){
            $arr[$i][$j] = rand(1,100);
        }
    }

    for($i = 0;$i<$dim;$i++){
        for($j =0;$j<$dim;$j++){
                printf("%03d ",$arr[$i][$j]);
        }
        echo "<br />";
    }