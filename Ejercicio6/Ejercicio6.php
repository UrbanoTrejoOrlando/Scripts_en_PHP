<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para determinar el costo que tendrá realizar una llamada telefónica

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tiempo = floatval($_POST["tiempo"]);
    $costo = floatval($_POST["costo"]);
    $total = $tiempo * $costo;

    echo json_encode([
        "icon" => "success",
        "message" => "Costo de la llamada: $" . number_format($total, 2)
    ]);
}
?>
