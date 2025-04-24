<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  04-09-2023
 * Correo: orlandourbanotrejo@gmail.com 
 * Algoritmo que multiplique dos arreglos */

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    $primero = $data['primero'] ?? [];
    $segundo = $data['segundo'] ?? [];

    if (count($primero) !== 5 || count($segundo) !== 5) {
        echo json_encode(["error" => "Ambos arreglos deben contener exactamente 5 elementos."]);
        exit;
    }

    $multiplicacion = [];
    for ($i = 0; $i < 5; $i++) {
        $multiplicacion[] = $primero[$i] * $segundo[$i];
    }

    echo json_encode(["resultado" => $multiplicacion]);
    exit;
}

http_response_code(405);
echo json_encode(["error" => "Método no permitido"]);
?>
