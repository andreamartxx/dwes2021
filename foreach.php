
<?php

    echo "<h2>Foreach Arrays</h2>";

    echo "<br>";

    $color = ["blanco", "verde", "rojo"];

    print_r($color);

    echo "<br>";
/* 
    $color_implode = implode(" ",$color);

    echo $color_implode; */

    //Lista desordenada elementos array

    function listaDesordenada ($color){

        echo "<ul>";

        foreach($color as $campo){

            echo "<li>".$campo."</li>";
                
        }

        echo "</ul>";
    }

    echo "<h3>Lista desordenada</h3>";

    listaDesordenada($color); 

?>
