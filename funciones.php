<?php 
/**
 * 
 * SERVIDOR: Funcion para clasificar al usuario segun su edad.
 * Requisito RA3: Encapsulamiento y reutilizacion de codigo.
 */

function obtenerEtiquetaEdad($edad) {
    if ($edad >= 15 && $edad <= 20){
        return "(joven)";
    } elseif ($edad > 60) { 
        return "(senior)";
    }
    return "";
}
?>