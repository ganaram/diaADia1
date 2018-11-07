<?php

$db = mysqli_connect("localhost","root","","superlistsdb");

// if(mysqli_connect_errno()){
//     echo "La hemos cagado conectado la BD." ;
// }else{
//     echo "Todo flama." ;
// }

mysqli_query($db,"SET NAMES 'utf8'");