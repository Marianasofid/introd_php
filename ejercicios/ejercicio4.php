<?php
// Definir rango
$inicio = 1;
$fin = 20;

// Contador de números pares
$cantidadPares = 0;

// Recorrer el rango
for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) { 
        $cantidadPares++;
    }
}

// Mostrar resultado
echo "Cantidad de números pares entre $inicio y $fin: " . $cantidadPares;
?>