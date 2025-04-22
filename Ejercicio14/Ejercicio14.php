<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la cantidad de euros a monedas y viceversa

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $opcion = $_POST["opcion"];
    $dinero = floatval($_POST["dinero"]);
    $dolar = 16.89;
    $euro = 0.0053;
    $total = 0;
    $moneda = "";

    if ($opcion == "1") {
        $total = $dinero / $dolar;
        $moneda = "dólares";
    } elseif ($opcion == "2") {
        $total = $dinero / $euro;
        $moneda = "euros";
    }

    echo json_encode([
        "icon" => "success",
        "total" => round($total, 2),
        "moneda" => $moneda
    ]);
}
?>
