<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula la calificacion de N alumnos y obtener el promedio general */

$suma = 0; $promedio = 0;
// Entrada de datos
echo "Numero de alumnos en su salon: ";
$alumnos = intval(readline());
for($i = 1; $i <= $alumnos; $i++){
	echo "Edad del alumno ".$i.": ";
	$edad = floatval(readline());
	$suma += $edad; 
}
// Entrada de datos
$promedio = $suma / $alumnos;
echo "El promedio de los alumnos de:".$promedio."\n";
?>
