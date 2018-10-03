<?php

function sumar($valor1, $valor2){
    return $valor1 + $valor2;
}

/* Solucion iterativa*/
function factorial($numero){
    $total = 1;
        for($i = $numero;$i>=1;$i--){
            $total *=$i;
        }
    return $total;
}

/* Solucion recursiva*/

function factorial_rec($num){
    if($num==1){
        return 1;
    }
        return $num * factorial_rec($num-1);
}

function fibonacci($num){
    if($num<=2){
        // El fibonacci de 1 y 2 es 1.
        return 1;
    }
    return fibonacci($num-1) + fibonacci($num-2);

}

function unidadesAstronomicas($distanciaEnKm){
    return $distanciaEnKm/1496000000;
}
function añosLuz($distanciaEnKm){
    return $distanciaEnKm/9460000000000;
}

echo añosLuz(4504300000);

?>