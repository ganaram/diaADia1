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
$arrayLineal = range(1,$dim*$dim);
shuffle($arrayLineal);


        for($i = 0;$i<$dim;$i++){
            for($j =0;$j<$dim;$j++){
                $arr[$i][$j] = $arrayLineal[$j++];
                printf("%03d ",$arr[$i][$j]);
            }echo "<br />";
        }
$end = microtime(true);
$time = $end - $start;



echo "La carga ha tardado: " . $time . " s";