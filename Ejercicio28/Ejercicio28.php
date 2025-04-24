<?php
// Autor: Orlando Urbano Trejo @Lando
// Fecha: 04-09-2023
// Correo: orlandourbanotrejo@gmail.com
// Algoritmo que imprime un árbol de Navidad en texto plano

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $altura = intval($_POST["altura"] ?? 0);

    if ($altura < 1) {
        echo json_encode(["error" => "La altura debe ser mayor o igual a 1."]);
        exit;
    }

    $arbol = "";

    for ($i = 1; $i <= $altura; $i++) {
        $espacios = $altura - $i;
        $arbol .= str_repeat(" ", $espacios);
        $arbol .= str_repeat("*", 2 * $i - 1);
        $arbol .= "\n";
    }

    $tronco = $altura - 1;
    for ($i = 1; $i <= 2; $i++) {
        $arbol .= str_repeat(" ", $tronco) . "*\n";
    }

    echo json_encode(["arbol" => $arbol]);
}
