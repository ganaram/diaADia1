<?php
//Recibe el nombre y apellidos por GET en la URL y los imprime
//en el navegador. Si no se han dado 

if( isset($_GET['name'])){
$name = $_GET['name'];
$lastname = $_GET['lastname'];
}else{
    $name = 'No name';
    $lastname = 'No lastname'
}

echo "{$name} {$lastname}";