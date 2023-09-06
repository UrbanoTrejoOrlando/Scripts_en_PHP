<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcule el total de una caja registradora */

$dinero = array(1000, 500, 200, 100, 50, 20, 5, 2, 1, .50, .20, .10);
for($i = 0; $i < count($dinero); $i++){
$resultado = 0;
	// Entrada de datos
	echo "Cantidad de dinero que tiene ".$dinero[$i]."\n";
	$convertidor = readline();
	$resultado = $resultado + ($convertidor * $dinero[$i]);
	echo "Total almacenado: $".$resultado."\n"; 
}
?>
