<?php
// Autor:  Orlando Urbano Trejo @Lando
// Fecha:  04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcule el total de una caja registradora

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $denominaciones = [1000, 500, 200, 100, 50, 20, 5, 2, 1, 0.50, 0.20, 0.10];
    $cantidades = $_POST['cantidades'] ?? [];

    $total = 0;

    foreach ($denominaciones as $i => $valor) {
        $cantidad = isset($cantidades[$i]) ? intval($cantidades[$i]) : 0;
        $total += $cantidad * $valor;
    }

    echo json_encode([
        "icon" => "success",
        "message" => "Total en caja: $" . number_format($total, 2)
    ]);
}
?>
