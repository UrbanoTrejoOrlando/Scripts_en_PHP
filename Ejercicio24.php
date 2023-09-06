<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo que calcula la tercera parte de un numero */

$r1 = 0; $r2 = 0; $r3 = 0;
// Entrada de datos
echo "Ingresa un numero: ";
$numero = floatval(readline());
// Operaciones
$r1 = ($numero * 2);
$r2 = ($r1 / 3);
$r3 = ($r2 / 2);
echo "La mitad de la tercera parte de ".$numero." es: ".$r3."\n";
?>
