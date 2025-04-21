<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que determina los intereses que tiene una persona con el banco

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $anio_inicio = intval($_POST["anio_inicio"]);
    $anio_actual = intval($_POST["anio_actual"]);
    $prestamo = 1000;
    $intereses = [];

    for ($i = $anio_inicio; $i <= $anio_actual; $i++) {
        $prestamo += ($prestamo * 0.27);
        $intereses[] = [
            "anio" => $i,
            "interes" => round($prestamo, 2)
        ];
    }

    echo json_encode([
        "icon" => "success",
        "intereses" => $intereses
    ]);
}
?>
