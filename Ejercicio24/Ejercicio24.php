<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la mitad de la tercera parte de un número

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = floatval($_POST["numero"] ?? 0);

    $r1 = $numero * 2;
    $r2 = $r1 / 3;
    $r3 = $r2 / 2;

    echo json_encode([
        "resultado" => number_format($r3, 2, '.', ''),
        "original" => $numero
    ]);
}
