<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcule el sueldo total de un empleado */

// Entrada de datos
echo "Horas trabajadas: ";
$horas = readline();
echo "Sueldo por hora: ";
$sueldo = readline();
// Operaciones
$total = $horas * $sueldo;
echo "Sueldo total: $".$total."\n";
?>
