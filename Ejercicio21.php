<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo que calcula la edad de una persona en meses */

$resultado = 0;
// Entrada de resultados
echo "Edad: ";
$edad = readline();
echo "Meses: ";
$meses = readline();
$resultado = $resultado + ($edad * 12 ) + $meses;
echo "Edad ".$resultado." meses "."\n";
?>
