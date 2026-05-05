<?php

// Ingresar duración de la llamada (en minutos)

$duracion = 5; 

// Definir costo

if ($duracion <= 3) {

    $costo = 300;

} else {

    $minutosExtra = $duracion - 3;

    $costo = 300 + ($minutosExtra * 50);

}

// Mostrar resultado

echo "Duración de la llamada: " . $duracion . " minutos <br>";

echo "Costo a pagar: $" . $costo;

?>