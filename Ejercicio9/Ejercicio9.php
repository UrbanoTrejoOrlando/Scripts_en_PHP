<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para determinar el sueldo semanal de un trabajador y aplicar descuentos dependiendo del sueldo por hora

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $horas = floatval($_POST["horas"]);
    $salario = floatval($_POST["salario"]);

    $sueldo = $horas * $salario;
    $nuevo_salario = 0;

    if ($salario >= 0 && $salario <= 150) {
        $nuevo_salario = $sueldo * 0.5;
    } elseif ($salario > 150 && $salario <= 300) {
        $nuevo_salario = $sueldo * 0.3;
    } elseif ($salario > 300 && $salario <= 450) {
        $nuevo_salario = $sueldo * 0.1;
    } else {
        $nuevo_salario = 0;
    }

    $total = $sueldo - $nuevo_salario;

    echo json_encode([
        "icon" => "success",
        "message" => "El salario final de $nombre es: $" . number_format($total, 2)
    ]);
}
?>
