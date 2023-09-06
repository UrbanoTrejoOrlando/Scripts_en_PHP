<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com *
 * Algoritmo que calcula el saldo de sus clientes, para no generar intereses y dependiendo del año hacer descuentos especificos. */

$pago_actual = 0; $saldo_minimo = 0; $pago_interes = 0;
// Entrada de datos
echo "Numero de clientes: ";
$cliente = readline();
for($i = 1; $i <= $cliente; $i++){
	echo "Nombre del cliente: ";
	$nombre = readline();
	echo "Saldo anterior: ";
	$saldo_anterior = readline();
	echo "Ultimo deposito: ";
	$deposito = readline();
	echo "Monto por ventas: ";
	$monto_compras = readline();
	echo "Saldo actual: ";
	$saldo_actual = readline();
	
	$pago_actual = ($saldo_actual * 0.12) + 200;
	$saldo_minimo = $saldo_actual * 0.15;
	$pago_interes = $saldo_actual * 0.85;

	echo "Tu saldo actual ".$nombre."es de: $".$pago_actual."\n";
	echo "Tu pago minimo ".$nombre."es de: $".$saldo_minimo."\n";
	echo "El pago para no generar intereses ".$nombre."es de: $".$pago_interes."\n";
}

?>
