<?php


if(!empty($_POST)){
    $dni=$_POST['dni'];
    global $error;
    echo "<br>";
    if(empty($dni)){
        $error = "No ha introducido datos, rellene el campo DNI.";
    }
    else if(strlen($dni)!=8 && !is_int($dni)){
        $error = "Ha introducido datos inválidos, revise los mismos.";
    }
    else{
        echo $dni .'-'. substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
    }
}
require_once 'form_dni.php';
