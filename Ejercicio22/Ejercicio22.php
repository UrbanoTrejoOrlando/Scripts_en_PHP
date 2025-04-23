<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcule las comisiones de un empleado dependiendo de las ventas realizadas.

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sueldo = floatval($_POST["sueldo"] ?? 0);
    $ventas = $_POST["ventas"] ?? [];

    $comision = 0;
    foreach ($ventas as $precio) {
        $comision += floatval($precio) * 0.10;
    }

    $total = $sueldo + $comision;

    echo json_encode([
        "comision" => number_format($comision, 2, '.', ''),
        "total" => number_format($total, 2, '.', ''),
        "icon" => "success"
    ]);
}
?>
