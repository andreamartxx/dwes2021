<?php

    echo "<h2>Foreach Arrays</h2>";

    $color = ["blanco" => "blanco.html", "verde" => "verde.html", "rojo" => "rojo.html"];

 //   print_r($color);

    echo "<br>";

    //Lista desordenada elementos array

    function listaDesordenada ($color){

        echo "<ul>";

        foreach($color as $campo => $valor){

            echo "<li><a href = $valor>".$campo."</li>";
                
        }

        echo "</ul>";
    }

    echo "<h3>Lista desordenada con un enlace</h3>";

    listaDesordenada($color); 

?>
