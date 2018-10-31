<?php

$importe = $_GET['importe'];
$pagado = $_GET['pagado'];
// $pagado = $_GET['pagado'];

require_once 'funciones.php';

$cambio = calcularDevolucion($importe,$pagado);

echo calcularCambio($cambio);

?>