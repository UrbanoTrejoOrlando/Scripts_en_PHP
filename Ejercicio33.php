<?php
/* Autor:  Orlando Urbano Trejo @Lando
 * Fecha:  05-09-2023 
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que calcula los creditos de alumnos dependiendo de ciertas actividades */

$Carrera = 0;
$Credito = 0;
$Lugar = 0;

echo "Estás inscrito a un taller (1 = Si y 2 = No): ";
$Credito = intval(readline());

if ($Credito == 1) {
    echo "Tienes un crédito"."\n";
    echo "Participaste en la carrera (1 = sí y 2 = NO): ";
    $Carrera = intval(readline());

    if ($Carrera == 1) {
        echo "Tienes otro crédito"."\n";
        echo "Quedaste en uno de los 3 primeros lugares: ";
        $Lugar = intval(readline());

        if ($Lugar == 1) {
            echo "Genial, tienes tres créditos"."\n";
        } else if ($Lugar == 2) {
            echo "Tienes dos créditos"."\n";
        }
    } else if ($Carrera == 2) {
        echo "Tienes solo un crédito"."\n";
    }
} else if ($Credito == 2) {
    echo "Inscríbete a un taller por favor"."\n";
    echo "Participaste en la carrera (1 = sí y 2 = NO): ";
    $Carrera = intval(readline());

    if ($Carrera == 1) {
        echo "Tienes un crédito"."\n";
        echo "Quedaste en uno de los 3 primeros lugares: ";
        $Lugar = intval(readline());

        if ($Lugar == 1) {
            echo "Tienes dos créditos"."\n";
        } else if ($Lugar == 2) {
            echo "Tienes un crédito"."\n";
        }
    } else if ($Carrera == 2) {
        echo "No tienes ningún crédito"."\n";
    }
} else {
    echo "Opción inválida"."\n";
}
?>

