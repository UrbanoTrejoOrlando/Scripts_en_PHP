<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo para calcular el descuento de un medicamento */

$total;
// Entrada de datos
echo "Nombrei: ";
$nombre = readline();
echo "Precio del medicamento: ";
$precio = readline();
$total = $precio - ($precio * 0.35);
// Impresion de resultados
echo "Cliente ".$nombre. " el total a pagar es de: $".$total."\n";
?>
