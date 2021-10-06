<?php

    echo "<h1>Ordenación por longitud de descripción</h1>";

    $array = ["Andrea" => "Martín", "Saúl" => "Pacheco", "Carlos" => "Ramos", "Aaron" => "Ruíz"];

    echo mb_strlen('Ruíz');

    function comparacion ($a, $b){ //compara valores del array

        if(mb_strlen($a) == mb_strlen($b)){

            return 0;
        }
        return (mb_strlen($a) < mb_strlen($b)) ? -1:1;
    }
    
    uasort($array, 'comparacion'); //callable

    print_r($array);

?>
