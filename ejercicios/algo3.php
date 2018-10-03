<?php

$num=$_GET['num'];

// if(!is_int(intval($dni))){
    // echo "Introduce un numero entero."
// }else if($dni>=1000000 $$ $dni <100000000){
echo $num .'-'. substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($num,"XYZ","012")%23,1);
// }