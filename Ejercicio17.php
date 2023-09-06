<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo que calcula la cantidad de dinero que tienes */

$cajero = array(1000, 500, 200, 100, 50, 20, 10, 5, 2, 1, 0.50);
$cantidad = 0;
for($i = 0; $i < count($cajero); $i++){
	// Entrada de datos	
	echo "Cantidad de ".$cajero[$i]." que tienes: ";
	$c = readline();
	$cantidad += +($c * $cajero[$i]);
	echo "Total = $".$cantidad."\n"; 
}



?>
