<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que permite calcular el factorial de un numero */

$resultado = 1;
// Entrada de datos
echo "Ingresa un numero: ";
$numero = intval(readline());
for($i = 1; $i <= $numero; $i++){
	$resultado *= $i;
}
echo "El factorial de ".$numero. " es: ".$resultado."\n";
?>
