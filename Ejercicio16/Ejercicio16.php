<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula el presupuesto anual de tres áreas de un hospital

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $presupuesto = floatval($_POST["presupuesto"]);

    $urgencias = $presupuesto * 0.37;
    $pediatria = $presupuesto * 0.42;
    $traumatologia = $presupuesto * 0.21;

    echo json_encode([
        "icon" => "success",
        "urgencias" => round($urgencias, 2),
        "pediatria" => round($pediatria, 2),
        "traumatologia" => round($traumatologia, 2)
    ]);
}
?>
