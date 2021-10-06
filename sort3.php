<?php

    echo "<h1>Ordenación por longitud de descripción</h1>";

    $array = ["Andrea" => "Martín", "Saúl" => "Pacheco", "Carlos" => "Ramos", "Aaron" => "Ruiz"];

    function comparacion ($a, $b){ //compara valores del array

        if(strlen($a) == strlen($b)){

            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1:1;
    }
    
    uasort($array, 'comparacion'); //callable

    print_r($array);

?>
