<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que suma tres números

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = floatval($_POST["numero1"] ?? 0);
    $numero2 = floatval($_POST["numero2"] ?? 0);
    $numero3 = floatval($_POST["numero3"] ?? 0);

    $suma = $numero1 + $numero2 + $numero3;

    echo json_encode([
        "icon" => "success",
        "suma" => round($suma, 2)
    ]);
}
?>
