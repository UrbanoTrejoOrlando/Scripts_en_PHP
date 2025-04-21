<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula el saldo de sus clientes, para no generar intereses y dependiendo del año hacer descuentos específicos.

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $saldo_actual = floatval($_POST["saldo_actual"]);

    $pago_actual = ($saldo_actual * 0.12) + 200;
    $saldo_minimo = $saldo_actual * 0.15;
    $pago_interes = $saldo_actual * 0.85;

    echo json_encode([
        "icon" => "success",
        "message" => "Cliente: $nombre\nSaldo actual: $" . number_format($pago_actual, 2) . 
                     "\nPago mínimo: $" . number_format($saldo_minimo, 2) . 
                     "\nPago sin intereses: $" . number_format($pago_interes, 2)
    ]);
}
?>
