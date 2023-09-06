<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcule el sueldo total de un empleado */

// Entrada de datos
echo "Nombre del empleado: ";
$nombre = readline();
echo "Salari0: ";
$salario = readline();
// Operaciones
$total = $salario - ($salario * 0.29);
echo "Empleado ".$nombre." su salario es de: $".$total."\n";
?>
