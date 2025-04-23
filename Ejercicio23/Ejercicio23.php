<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo para determinar si eres mayor de edad */

// Entrada de datos
echo "Edad: ";
$edad = intval(readline());
// Condicionales
if($edad >= 18){
	echo "Eres mayor de edad"."\n";	
}
else{
	echo "Eres menor de edad"."\n";	
}
?>
