<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que almacena calificaciones de alumnos y calcula su promedio

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $materia = $_POST["materia"] ?? "";
    $calificaciones = $_POST["calificaciones"] ?? [];

    if (count($calificaciones) != 5) {
        echo json_encode(["error" => "Debes ingresar 5 calificaciones."]);
        exit;
    }

    $suma = 0;
    foreach ($calificaciones as $cal) {
        $suma += floatval($cal);
    }

    $promedio = $suma / 5;

    echo json_encode([
        "materia" => $materia,
        "calificaciones" => $calificaciones,
        "promedio" => number_format($promedio, 2)
    ]);
}
