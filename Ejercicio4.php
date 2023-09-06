<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo para calcular el tiempo que tarda una persona en llegar a un lugar */
// Entrada de datos
echo "Velocidad en (km/h): ";
$km = readline();
echo "Distancia recorridad: ";
$distancia = readline();
// Operaciones
$total = $km * $distancia;
echo "Tiempo = ",$total. "\n";
