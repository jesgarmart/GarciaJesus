<?php
/**
 * Script de ejemplo para phpDocumentor
 * 
 * Este archivo contiene funciones simples para demostrar
 * el uso de phpDocumentor en un contenedor Docker.
 * 
 * @author Garcia
 * @version 1.0
 */

/**
 * Suma dos números enteros.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int La suma de ambos números.
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Calcula el factorial de un número.
 *
 * @param int $numero El número del que se desea obtener el factorial.
 * @return int El factorial del número.
 * @internal Esta función solo debe ser usada por desarrolladores avanzados.
 */
function factorial($numero) {
    if ($numero <= 1) {
        return 1;
    }
    return $numero * factorial($numero - 1);
}
?>
