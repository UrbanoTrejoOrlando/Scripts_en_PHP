<?php
/* Orlando Urbano Trejo @Lando
 * Fecha: 04-09-2023
 * Correo:orlandourbanotrejo@gmail.com
 * Algoritmo que calcula el descuento de una urna dependiendo del tipo de pelota que saque */

$Pelota = 0;
$Compra = 0;
$Resultado = 0;

echo "-----CAFETERIA TESJI-----\n";
echo "1) Pelota Verde\n";
echo "2) Pelota Roja\n";
echo "3) Pelota Amarilla\n";
// Entrada de datos
echo "Elige una opcion: ";
$Pelota = intval(readline());
// Condiciones
if ($Pelota == 1) {
    echo "Descuento 10%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.10);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} elseif ($Pelota == 2) {
    echo "Descuento 5%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.05);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} elseif ($Pelota == 3) {
    echo "Descuento 15%\n";
    echo "Total de tu compra: ";
    $Compra = floatval(readline());
    $Resultado = $Compra - ($Compra * 0.15);
    echo "Monto total: $" . number_format($Resultado, 2, '.', '') . "\n";
} else {
    echo "Opcion no valida\n";
}
?>

