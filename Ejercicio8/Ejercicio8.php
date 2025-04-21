<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para determinar el pago que debe realizar una persona por el consumo de agua

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $precio = floatval($_POST["precio"]);
    $metros = floatval($_POST["metros"]);
    $total = $precio * $metros;

    echo json_encode([
        "icon" => "success",
        "message" => "El pago por el consumo de agua es: $" . number_format($total, 2)
    ]);
}
?>
