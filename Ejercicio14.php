<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula la cantidad de euros a monedas y viceversa */

echo "------MENU DE CONVERSIONES------"."\n"."1) Euros"."\n"."2) Dolares"."\n";
$dolar = 16.89; $euro = 0.0053; $total = 0;
// Entrada de datos
echo "Elige una opcion: ";
$opcion = readline();
// Condiciones
if($opcion == 1){
	echo "Dinero: ";
	$dinero = readline();
	$total = $dinero / $dolar;
	echo "Dinero: ".$total." dolares"."\n";
}
else if($opcion == 2){
	echo "Dinero: ";
	$dinero = readline();
	$total = $dinero / $euro;
	echo "Dinero: ".$total." euros"."\n";
}
?>
