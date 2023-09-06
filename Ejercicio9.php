<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo para determinar el sueldo semanal de N trabajadores y aplicar descuentos dependiendo de las horas se hara un descuento correspondiente */

// Entrada de datos
echo "Numero de trabajadores: ";
$trabajador = readline();
$sueldo = 0; $nuevo_salario = 0; 
for($i = 1; $i <= $trabajador; $i++){
	echo "Nombre del trabajador ".$i."\n";
	$nombre = readline();
	echo "Horas trabajadas: ";
	$horas = readline();
	echo "Sueldo por hora: ";
	$salario = readline();
	$sueldo = $horas * $salario;
	// Condicionales
	if($salario >= 0 and $salario <= 150){
		$nuevo_salario = $sueldo * 0.5;
	}
	else if($salario > 150 and $salario <= 300){
		$nuevo_salario = $sueldo * 0.7;
	}
	else if($salario > 300 and $salario <= 450){
		$nuevo_salario = $sueldo * 0.9;
	}
	else {
		$nuevo_salario = 0;
	}
}
// Impresion de resultados
$total = $sueldo - $nuevo_salario;
echo "Trabajador: ".$nombre."\n";
echo "Salario final: ".$total."\n";


