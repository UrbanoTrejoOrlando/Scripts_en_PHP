<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 05-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula el total de vestidos comprados según talla

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $talla = $_POST["talla"] ?? "";
    $cantidad = floatval($_POST["cantidad"] ?? 0);
    $precios = [
        "grande" => 500,
        "mediana" => 400,
        "chica" => 300
    ];

    if (!array_key_exists($talla, $precios)) {
        echo json_encode(["error" => "Talla inválida."]);
        exit;
    }

    $total = $cantidad * $precios[$talla];
    echo json_encode([
        "talla" => ucfirst($talla),
        "cantidad" => $cantidad,
        "total" => number_format($total, 2, '.', '')
    ]);
}
