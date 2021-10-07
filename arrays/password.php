<?php

    echo "<h1>Contraseña Random</h1>";

    $contraseña ="";

    function randPass ($upper = 1, $lower = 5, $numeric = 3, $other=2){

        $totalUpper= "";
        $totalLower="";
        $totalNumeric ="";
        $totalOther="";

        for ($i=0; $i<$upper; $i++){
            $totalUpper .= chr(rand(65, 90));
        }

        for ($i=0; $i<$lower; $i++){
            $totalLower .= chr(rand(97, 122));
        }

        for ($i=0; $i<$numeric; $i++){
            $totalNumeric .= chr(rand(48, 57));
        }

        for ($i=0; $i<$other; $i++){
            
            $rangoOther = [chr(rand(32, 47)), chr(rand(58, 64)), chr(rand(91, 96)), chr(rand(123, 126))];
            
            shuffle($rangoOther);

            $totalOther .= $rangoOther[0];
        }

        return str_shuffle($totalUpper.$totalLower.$totalNumeric.$totalOther);

    }

    $contraseña = randPass (1, 5, 3, 2);

    echo "La contraseña es: " .$contraseña;
    
?>
