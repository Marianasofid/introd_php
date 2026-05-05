<?php 
    // esto es un comentario de  una linea
    # Esto es tambien un comentario 

    /*
    ESte es un bloque de multiples lineas
    */

?>


<?php
    $nombre = "juan";
    $edad = 20; 

    echo $nombre // Imprime: juan 

?>


<?php   
    define("pi",3.1416)
    const SALUDO = "hola";
    echo PI; // imprime: 3.1416

?>


<?php  
    $frutas = ["Manzana","Banano","Uva"]

    echo $frutas[0]; // Imprime: Manzana 
    echo $frutas[2]; // Imprime: Uva 
?>


<?php 
    $persona = [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => "Bogotá"
    ];
    echo $persona ["nombre"]; // Imprime:ana
?>