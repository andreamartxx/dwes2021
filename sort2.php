<?php

    $temperaturas = "23, 22, 7, 25, 32, 28, 26, 5, 3, 2";

    $array = explode(", ", $temperaturas);

    echo "<h4>Las 5 temperaturas más frias</h4>";
    
    sort($array);

    $tempMin = " ";

    $contador = 0;

        foreach($array as $valor){

            $tempMin .= $valor. ", ";

            $contador++;

            if($contador == 5){

                break;

            }

        }
    
    $tempMin = substr($tempMin, 0, -2);

    echo $tempMin;

    echo "<h4>Las 5 temperaturas más cálidas</h4>";
    
    rsort($array);

    $tempMax = " ";

        foreach($array as $valor){

            $tempMax .= $valor. ", ";

            $contador--;

            if($contador == 0){

                break;

            }

        }
    
    $tempMax = substr($tempMax, 0, -2);

    echo $tempMax;
?>
