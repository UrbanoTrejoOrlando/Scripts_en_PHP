<?php
/* Orlando Urbano Trejo @Lando
 * Fecha: 04-09-2023
 * Correo: orlandourbanotrejo@gmail.com
 * Algoritmo que imprima un arbol de navidad */

$espacios = 0;
$tronco = 0;
// Entrada de datos
echo "Altura del arbol: ";
$altura = intval(readline());

for ($i = 1; $i <= $altura; $i++) {
    $espacios = $altura - $i;

    // Espacios en blanco
    for ($j = 1; $j <= $espacios; $j++) {
        echo " ";
    }

    // Asteriscos
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "\n";
}
// Impresion del tronco
$tronco = $altura - 1;
for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= $tronco; $j++) {
        echo " ";
    }
    echo "*\n";
}
?>
