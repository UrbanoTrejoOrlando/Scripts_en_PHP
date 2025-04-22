<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcule el sueldo total de un empleado

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $horas = floatval($_POST["horas"] ?? 0);
    $sueldo = floatval($_POST["sueldo"] ?? 0);

    $total = $horas * $sueldo;

    echo json_encode([
        "icon" => "success",
        "sueldo" => round($total, 2)
    ]);
}
?>
