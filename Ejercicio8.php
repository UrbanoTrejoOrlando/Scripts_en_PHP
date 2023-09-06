<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo para determinar el pago que debe realizar una persona por el consumo de agua */

// Entrada de datos
echo "Ingrese el precio por metro: ";
$precio = readline();
echo "Metros trabajados: ";
$metros = readline();
// Operaciones
$total = $precio * $metros;
echo "Pago = $".$total."\n";
?>

