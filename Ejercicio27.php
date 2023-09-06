<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  05-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula la calificacion de N alumnos y obtener el promedio general */

echo "----VESTIDOS----"."\n"."1) Grande $5000"."\n"."2) Mediana $400"."\n"."3) Chica $300"."\n";
$total  = 0;
// Entrada de datos
echo "Elige  una marca: ";
$marca = intval(readline());
// Condiciones
if($marca == 1){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 500;
}
else if($marca == 2){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 400;
}
else if($marca == 2){
	echo "Numero de vestidos que deseas comprar: ";
	$cantidad = floatval(readline());
	$total = $cantidad * 300;
}
echo "Monto total de la venta: $".$total."\n";
?>
