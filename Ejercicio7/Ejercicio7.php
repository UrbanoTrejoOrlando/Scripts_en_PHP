<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para leer calificaciones de N alumnos y determinar el número de aprobados y reprobados

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $calificaciones = $_POST["calificaciones"];
    $aprobados = 0;
    $reprobados = 0;

    foreach ($calificaciones as $calificacion) {
        if (floatval($calificacion) >= 70) {
            $aprobados++;
        } else {
            $reprobados++;
        }
    }

    echo json_encode([
        "icon" => "info",
        "message" => "Total de alumnos: " . count($calificaciones) . "\nAprobados: $aprobados\nReprobados: $reprobados"
    ]);
}
?>
