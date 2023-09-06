<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo para leer calificaciones de N alumnos y determinar el numero de aprobados y reprobados */

// Entrada de datos
echo "Cantidad de alumnos: ";
$alumnos = readline();
for($i = 1; $i <= $alumnos; $i++){
	echo "Calificacion del alumno ".$i.": "."\n";
	$calificacion = readline();
	// Condiciones
	if($calificacion >= 70){
	 	echo "Aprobado"."\n";
	}
	else{
		echo "Reprobado"."\n";	
    }
}

