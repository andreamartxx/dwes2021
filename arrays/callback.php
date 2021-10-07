<?php

    echo "<h2>Callbacks</h2>";

    echo "<h5>Longitud máxima y mínima cadena de arrays</h5>";

    $array = ["largo", "muy largo", "normal", "casi largo"];

    function calcularLongitud ($valor){

        return strlen($valor);

    }

    $longitud = array_map('calcularLongitud', $array);

    echo "La longitud máxima es: " .max($longitud) . "<br>";

    echo "La longitud mínima es: " .min($longitud);

?>
