<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que determina el precio del boleto de un viaje

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kilometros = intval($_POST["kilometros"]);
    $precio = 20.50; // Precio por kilómetro
    $total = $precio * $kilometros;

    echo json_encode([
        "icon" => "success",
        "total" => round($total, 2)
    ]);
}
?>
