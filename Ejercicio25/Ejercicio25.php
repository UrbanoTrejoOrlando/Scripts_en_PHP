<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que permite calcular el factorial de un número

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = intval($_POST["numero"] ?? 0);
    $resultado = 1;

    if ($numero < 0) {
        echo json_encode([
            "error" => "No se puede calcular el factorial de un número negativo."
        ]);
        exit;
    }

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    echo json_encode([
        "numero" => $numero,
        "factorial" => $resultado
    ]);
}
