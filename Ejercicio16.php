<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo que calcula el presupuesto anual de tres areas de un hospital */

$urgencias = 0; $pediatria = 0; $traumatologia = 0;
// Entrada de datos 
echo "Presupuesto anual: ";
$presupuesto = readline();
$urgencias = $presupuesto * 0.37;
$pediatria = $presupuesto * 0.42;
$traumatologia = $presupuesto * 0.21;
// Impresion de resultados
echo "Presupuesto Urgencias: ".$urgencias."\n";
echo "Presupuesto Pediatria: ".$pediatria."\n";
echo "Presupuesto Traumatologia: ".$traumatologia."\n";
?>
