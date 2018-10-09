<?php

$dni=$_POST['dni'];

if(strlen($dni)!=8 && !is_int(intval($dni))){
    echo "<textarea>" . "Ha introducido datos inválidos, revise los mismos." . "</textarea>";
}else{
echo "<textarea rows='1'>" . $dni .'-'. substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1) . "</textarea>";
}