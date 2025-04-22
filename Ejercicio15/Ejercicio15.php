<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para calcular el descuento de un medicamento

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $precio = floatval($_POST["precio"]);
    $descuento = $precio * 0.35;
    $total = $precio - $descuento;

    echo json_encode([
        "icon" => "success",
        "nombre" => $nombre,
        "total" => round($total, 2),
        "descuento" => round($descuento, 2)
    ]);
}
?>
