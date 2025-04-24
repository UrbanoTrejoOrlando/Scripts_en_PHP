<?php
/* Orlando Urbano Trejo @Lando
 * Fecha: 04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que registra calificaciones de varias materias y calcula su promedio */

// Leer archivo JSON
 header('Content-Type: application/json');

$input = json_decode(file_get_contents("php://input"), true);

// Arreglo con las materias a agregar
$materias = array(
    "Cálculo Diferencial",
    "Fundamentos de Programación",
    "Química",
    "Fundamentos de investigación",
    "Matemáticas Discretas",
    "Desarrollo Sustentable"
);

// Inicializacion de variables
$calificaciones = array();
$promedios_materias = array(0, 0, 0, 0, 0, 0);
$promedio_general = 0;

if (!isset($input['calculo']) || !isset($input['programacion']) || !isset($input['quimica']) || !isset($input['investigacion']) || !isset($input['discretas']) || !isset($input['sustentable'])) {
    echo json_encode(["error" => "Datos incompletos"]);
    exit();
}

// Calificaciones por materia (por ejemplo, 5 unidades por materia)
$calificaciones['Cálculo Diferencial'] = $input['calculo'];
$calificaciones['Fundamentos de Programación'] = $input['programacion'];
$calificaciones['Química'] = $input['quimica'];
$calificaciones['Fundamentos de investigación'] = $input['investigacion'];
$calificaciones['Matemáticas Discretas'] = $input['discretas'];
$calificaciones['Desarrollo Sustentable'] = $input['sustentable'];

// Calcular los promedios de cada materia
foreach ($calificaciones as $key => $materia_calificaciones) {
    $materia_index = array_search($key, $materias);
    $promedios_materias[$materia_index] = array_sum($materia_calificaciones) / count($materia_calificaciones);
    $promedio_general += $promedios_materias[$materia_index];
}

// Promedio general
$promedio_general /= count($materias);

$response = [
    "promedioGeneral" => number_format($promedio_general, 2),
    "promediosMateria" => $promedios_materias
];

echo json_encode($response);
?>
