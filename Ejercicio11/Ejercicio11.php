<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la multiplicación de dos números

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero1 = floatval($_POST["numero1"]);
    $numero2 = floatval($_POST["numero2"]);
    $resultado = $numero1 * $numero2;

    echo json_encode([
        "icon" => "success",
        "message" => "Resultado de $numero1 x $numero2 = $resultado"
    ]);
}
?>
