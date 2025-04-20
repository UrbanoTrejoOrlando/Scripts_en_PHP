<?php
// Autor:  Orlando Urbano Trejo @Lando
// Fecha:  04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcule el precio total del boleto de una persona

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $precioKilometro = floatval($_POST['precioKilometro']);
    $distancia = floatval($_POST['distancia']);

    if ($precioKilometro <= 0 || $distancia <= 0) {
        echo json_encode([
            "icon" => "error",
            "message" => "Ambos valores deben ser mayores que cero"
        ]);
        exit;
    }

    $total = $precioKilometro * $distancia;

    echo json_encode([
        "icon" => "success",
        "message" => "Precio del boleto: $" . number_format($total, 2)
    ]);
}
?>
