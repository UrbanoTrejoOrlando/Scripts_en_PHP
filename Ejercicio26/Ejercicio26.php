<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la edad promedio de N alumnos

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $edades = $_POST["edades"] ?? [];

    if (!is_array($edades) || count($edades) === 0) {
        echo json_encode(["error" => "Debes ingresar al menos una edad."]);
        exit;
    }

    $suma = 0;
    foreach ($edades as $edad) {
        $suma += floatval($edad);
    }

    $promedio = $suma / count($edades);

    echo json_encode([
        "cantidad" => count($edades),
        "promedio" => round($promedio, 2)
    ]);
}
