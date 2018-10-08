<?php

ini_set('max_execution_time',300);

$dim = $_GET['dim'];

$arrayLineal = [];
$arr = [];

for($i = 0;$i<$dim;$i++){
    for($j =0;$j<$dim;$j++){
        $arr[$i][$j] =0;
    }
}

$start = microtime(true);

for($i = 0;$i<($dim*$dim);$i++){
    $arrayLineal[$i] = $i + 1;
}

        for($i = 0;$i<$dim;$i++){
            for($j =0;$j<$dim;$j++){
                $pos = rand(1,count($arrayLineal)-1);
                $num = $arrayLineal[$pos];
                unset($arrayLineal[$pos]);
                $arrayLineal = array_values($arrayLineal);
                $arr[$i][$j] = $num;
                printf("%03d ",$arr[$i][$j]);
            }echo "<br />";
        }
$end = microtime(true);
$time = $end - $start;



echo "La carga ha tardado: " . $time . " s";