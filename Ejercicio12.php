<?php
/* Autor:  Orlando Urbano Trejo @Lando 
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que determina los intereses que tiene una persona con el banco */

$prestamo = 1000;
// Entrada de datos
echo "Año en el que solicitaste el prestamo: ";
$anio = readline();
echo "Año actual: ";
$actual = readline();
for($i = $anio; $i<= $actual; $i++){
	$prestamo = $prestamo+ ($prestamo * 0.27);
	echo "El interes de ".$i. " es de: $".$prestamo."\n";
}
 
