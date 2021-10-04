<?php
    echo "<h2>Ordenar array asociativo</h2>";

    $edades = ["Juan" => "31", "Maria" => "41", "Andrés" => "39", "Berta" => "40"];

    $ordenArray = $edades;

    //Ordenado por nombre ascendente

    echo "<h3>Orden nombres ascendente</h2>";

        ksort($ordenArray, 0);

        print_r($ordenArray);
    
    //Ordenado por edad ascendente

    echo "<h3>Orden edad ascendente</h2>";

        asort($ordenArray, 1);

        print_r($ordenArray);

    //Ordenado por Nombre descendente

    echo "<h3>Orden Nombre descendente</h3>";

        krsort($ordenArray, 0);

        print_r($ordenArray);
    
    //Ordenado por edad ascendente

    echo "<h3>Orden edad descendente</h2>";

        arsort($ordenArray, 1);

        print_r($ordenArray);

?>
