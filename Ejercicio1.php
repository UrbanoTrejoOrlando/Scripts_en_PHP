<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023          
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula la letra a la que te corresponde dependiendo de la calificacion */

// Entrada de datos
echo "Ingresa la calificacion obtenida (0-10): ";
$calificacion = readline();
// Evaluacion del dato
switch($calificacion){	
	case 0:
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	echo "Tu calificacion es: F"."\n";
	break;
	case 6:
	case 7:
	echo "Tu calificacion es: D"."\n";
	break;
	case 8:   
	echo "Tu calificacion es: C"."\n";
	break;
	case 9:
	echo "Tu calificacion es: B"."\n";
    break;
    case 10:
	echo "Tu calificacion es: A"."\n";
	break;
}
