<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula la cantidad de ventas que realiza un vendedor y de acuerdo a esas ventas, realizar un descuento */

// Entrada de datos
echo "Numero de ventas: ";
$ventas = readline();
$totalfinal = 0;
$total = 0;
// Ciclo for
for($i = 0; $i < $ventas; $i++){
	echo "Precio de la venta ".($i+1)."\n";
	$precio = readline();
	$totalfinal = $totalfinal + $precio[$i];
	// Condiciones
	if($precio[$i] < 1000){
		$total = $total + $precio[$i];	
    }
	else if($precio[$i] > 1000 and $precio[$i] < 1000){
  		$total = $total + $precio[$i];	
    }
}
echo "Total final = $".$total."\n";
