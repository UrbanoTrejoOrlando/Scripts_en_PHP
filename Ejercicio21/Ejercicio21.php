<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la edad de una persona en meses

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $edad = intval($_POST["edad"] ?? 0);
    $meses = intval($_POST["meses"] ?? 0);

    $resultado = ($edad * 12) + $meses;

    echo json_encode([
        "icon" => "success",
        "resultado" => $resultado
    ]);
}
?>
