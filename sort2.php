<?php

    $temperaturas = "23, 7, 25, 32, 28, 26, 5";

    $array = explode(" ", $temperaturas, -1);
    
    sort($array);

    $tempMin = "";

    $contador = 0;

        foreach($array as $valor){

            $tempMin .= $valor;

            $contador++;

            if($contador == 5){

                break;

            }

        }
    
    $tempMin = substr($tempMin, 0, -2);
    
?>
