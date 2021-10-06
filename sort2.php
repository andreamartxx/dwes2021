<?php

    $temperaturas = "23, 22, 7, 25, 32, 28, 26, 5, 3, 2";

    $array = explode(", ", $temperaturas);

    echo "<h4>Las 5 temperaturas más frias</h4>";
    
    sort($array);

    $tempfria = $array;

    print_r(array_slice($tempfria, 0, 5));

    echo "<h4>Las 5 temperaturas más cálidas</h4>";
    
    rsort($array);

    $tempcalida = $array;

    print_r(array_slice($tempcalida, 0, 5));

    echo "<h4>La media de las temperaturas</h4>";

    $media = array_sum($array)/count($array);

    echo $media;
?>
