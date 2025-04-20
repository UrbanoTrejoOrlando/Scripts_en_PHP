<?php
// Autor:  Orlando Urbano Trejo @Lando
// Fecha:  04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la cantidad de ventas que realiza un vendedor y de acuerdo a esas ventas, realizar un descuento

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ventas = intval($_POST['ventas']);
    $total = 0;

    for ($i = 0; $i < $ventas; $i++) {
        $precio = floatval($_POST["precio" . $i]);

        if ($precio < 1000) {
            $total += $precio;
        }
        else {
            $total += $precio * 0.90; // Aplica un 10% de descuento si el precio es mayor a 1000
        }
    }

    echo json_encode([
        "icon" => "success",
        "message" => "Total final con descuento: $" . number_format($total, 2)
    ]);
}
?>
