<?php
// Crear array indexado
$numeros = [];

// Llenar el array con números del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// Mostrar los números usando for
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
?>