<?php
/* Orlando Urbano Trejo @Lando
 * Fecha: 04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula el descuento de una urna dependiendo del tipo de pelota que saque */

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$pelota = intval($data['pelota'] ?? 0);
$compra = floatval($data['compra'] ?? 0);
$resultado = 0;
$descuento = 0;

switch ($pelota) {
    case 1:
        $descuento = 0.10;
        break;
    case 2:
        $descuento = 0.05;
        break;
    case 3:
        $descuento = 0.15;
        break;
    default:
        echo json_encode(['error' => 'Opción no válida']);
        exit;
}

$resultado = $compra - ($compra * $descuento);
echo json_encode([
    'descuento' => $descuento * 100,
    'total' => number_format($resultado, 2, '.', '')
]);
?>
