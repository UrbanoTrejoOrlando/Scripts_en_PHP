<?php
// Autor:  Orlando Urbano Trejo @Lando
// Fecha:  04-09-2023          
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que calcula la letra a la que te corresponde dependiendo de la calificación

// Cabecera para permitir que el navegador reciba JSON
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $calificacion = intval($_POST['calificacion']);

    if ($calificacion < 0 || $calificacion > 10) {
        echo json_encode([
            "icon" => "error",
            "message" => "Calificación fuera de rango (0-10)"
        ]);
        exit;
    }

    switch ($calificacion) {
        case 0: case 1: case 2: case 3: case 4: case 5:
            $letra = "F";
            break;
        case 6: case 7:
            $letra = "D";
            break;
        case 8:
            $letra = "C";
            break;
        case 9:
            $letra = "B";
            break;
        case 10:
            $letra = "A";
            break;
    }

    echo json_encode([
        "icon" => "success",
        "message" => "Tu calificación es: $letra"
    ]);
}
?>
