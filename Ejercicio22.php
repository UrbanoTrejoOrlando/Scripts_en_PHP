<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcule las comisiones de un empleado dependiendo de las ventas realizadas. */

$comision = 0; $total = 0;
// Entrada de datos
echo "Sueldo fijo: ";
$sueldo = floatval(readline());
echo "Ventas realizadas: ";
$ventas = intval(readline());
// Recabar datos
for ($i = 1; $i <= $ventas; $i++) {
    echo "Precio de la venta " . $i . ": ";
    $precio = floatval(readline());
    $comision += $precio * 0.10; 
}
$total = $comision + $sueldo;
echo "Comision: $" . number_format($comision, 2, '.', '') . "\n";
echo "Sueldo total: $" . number_format($total, 2, '.', '') . "\n";
?>
