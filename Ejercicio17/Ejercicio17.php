<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la cantidad de dinero que tienes

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cajero = [1000, 500, 200, 100, 50, 20, 10, 5, 2, 1, 0.50];
    $cantidad = 0;

    foreach ($cajero as $valor) {
        if (isset($_POST["billete_$valor"])) {
            $cantidad += floatval($_POST["billete_$valor"]) * $valor;
        }
    }

    echo json_encode([
        "icon" => "success",
        "total" => round($cantidad, 2)
    ]);
}
?>
