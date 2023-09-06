<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcule el precio total del boleto de una persona, ingresando los datos por teclado */

// Entrada de datos
echo "Precio por kilometro: ";
$precioKilometro = readline();
echo "Cantidad de kilometros a recorrer: ";
$distancia = readline();
// Operaciones
$total = $precioKilometro * $distancia;
echo "Precio del boleto = $".$total."\n";
?>
