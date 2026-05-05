<?php
// Crear array asociativo (clave => día)
$dias = [
    "d1" => "Lunes",
    "d2" => "Martes",
    "d3" => "Miércoles",
    "d4" => "Jueves",
    "d5" => "Viernes",
    "d6" => "Sabado",
    "d7" => "Domingo"
];

// Obtener las claves del array
$claves = array_keys($dias);

// Recorrer con for
for ($i = 0; $i < count($dias); $i++) {
    $dia = $dias[$claves[$i]];
    echo substr($dia, 0, 2) . "<br>"; // primeras 2 letras
}
?>