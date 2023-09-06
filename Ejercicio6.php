<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo para determinar el costo que tendra realizar una llamada telefonica.*/

// Entrada de datos
echo "Tiempo de la llamada en minutos: ";
$tiempo = readline();
echo "Costo por minuto en pesos: ";
$costo = readline();
$total = $tiempo * $costo;
echo "Costo de la llamda = $".$total."\n";
