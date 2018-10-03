<head>

<title>Ejercicio 2 : Pirámide</title>

</head>

<body>

<?php
$tamaño = 6;
$espacios = $tamaño-1;
$asteriscos = 1;
print "&nbsp";
 for($i = 0;$i<=$tamaño;$i++){
    for($a = 0;$a<=$espacios;$a++){
        print "&nbsp";
    }
    for($b = 1;$b <= $asteriscos;$b++){
    print "*";
    }
    print "<br>";
    $asteriscos = $asteriscos+2;
    $espacios = $espacios-1;
 }
 /* El operador ternario es donde que, si la expresion es verdadera, se aplica lo que hay en el
 segundo operando, y si es falso, se aplica el de la tercera, por ejempo:
 $par = ($numero%2==0)? "PAR" : "IMPAR"; */

 ?>

 

     </body>