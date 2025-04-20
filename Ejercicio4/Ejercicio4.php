<?php
// Autor:  Orlando Urbano Trejo @Lando
// Fecha:  04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo para calcular el tiempo que tarda una persona en llegar a un lugar

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $velocidad = floatval($_POST['velocidad']);
    $distancia = floatval($_POST['distancia']);

    if ($velocidad <= 0) {
        echo json_encode([
            "icon" => "error",
            "message" => "La velocidad debe ser mayor a 0"
        ]);
        exit;
    }

    $tiempo = $distancia / $velocidad;

    echo json_encode([
        "icon" => "success",
        "message" => "Tiempo estimado: " . round($tiempo, 2) . " horas"
    ]);
}
?>
