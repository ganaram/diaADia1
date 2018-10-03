<?php

//Recibe un numero natural(entero positivo) e imprime los números pares entre 1 y ese numero.
//Codigaso Fran

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
if( !isset($num1)){
    if(!isset($num2)){
        die('Debes indicar un valor num en la URL.');
    }
}else if(!is_int(intval($num1))){
    if(!is_int(intval($num2))){
        die('Debes indicar un valor entero para num en la URL.');
    }
}else if($num1<1){
    if($_num2<1){
        die('Debes indicar un numero mayor que cero.');
    }
}else{
    $factor = -($num1<=>$num2); 
    //Con el factor decidimos si suma o resta, usando un spaceship.
    //El spaceship da -1 si es menor, 0 si es igual y 1 si es mayor.
    //Ademas, usamos el spaceship en el segundo estamento para escoger-
    //-si cortar cuando sea menor, o mayor.
    // Ademas le sumamos el factor al segundo estamento para imprimir todos.
    for ($i=$num1; $i<=>($num2+$factor); $i+=$factor) { 
        if($i%2==0){
            echo "{$i} <br> ";
        }
    }
}

    
        // for ($i=$num1; $i >= $num2; $i--) { 
        //     if($i%2==0){
        //         echo "{$i} <br> ";
        //     }
        // }

// Codigo Alumno
// if( isset($_GET['num'])){
//     $num = $_GET['num'];
//     if(is_int($_GET['num'])){
//         for ($i=1; $i <= $num; $i++) { 
//             if($i%2==0){
//                 echo "{$i} <br> ";
//             }
//         }
//     }else{
//         echo "Esta introduciendo un dato inválido.";
//     }
// }else{
//     echo "Debes indicar un valor num en la URL..";
// }