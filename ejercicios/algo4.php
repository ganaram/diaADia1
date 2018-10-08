<?php

//Script que crea array cuadrado de dos dinemsniones con numeros enteros aleatorios
// entre 1 y 100, la dimension se recibe por GET.

ini_set('max_execution_time',300);

$dim = $_GET['dim'];

$arr = array();
$start =microtime();
    for($i = 0;$i<$dim;$i++){
        for($j =0;$j<$dim;$j++){
            do{
            $number = rand(1,$dim*$dim);
            }while(arrayContains($arr,$number,$dim));
            
            $arr[$i][$j] = $number;
            printf("%03d ",$arr[$i][$j]);
        }
        echo "<br />";
    }
    $end=microtime();


    function arrayContains($array, $number, $dim){
        for($i=0;$i<$dim;$i++){
            for($j=0;$j<$dim;$j++){
                if($array[$i][$j] == $number) return true;
            }
        }return false;
    }

    ?>