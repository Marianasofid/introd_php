<?php
// Función que calcula cuadrado, cubo y raíz cuadrada
function calcular($numero) {
    $cuadrado = $numero * $numero;
    $cubo = $numero * $numero * $numero;
    $raiz = sqrt($numero);

    return [
        "cuadrado" => $cuadrado,
        "cubo" => $cubo,
        "raiz" => $raiz
    ];
}

// Ejemplo de uso
$resultado = calcular(4);

// Mostrar resultados
echo "Número: 4 <br>";
echo "Cuadrado: " . $resultado["cuadrado"] . "<br>";
echo "Cubo: " . $resultado["cubo"] . "<br>";
echo "Raíz cuadrada: " . $resultado["raiz"];
?>