<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcule el sueldo total de un empleado con descuento

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "Empleado";
    $salario = floatval($_POST["salario"] ?? 0);
    $total = $salario - ($salario * 0.29);

    echo json_encode([
        "icon" => "success",
        "nombre" => $nombre,
        "salario" => round($total, 2)
    ]);
}
?>
