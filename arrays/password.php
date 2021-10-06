<?php

    echo "<h1>Contraseña Random</h1>";

    function randPass ($upper = 1, $lower = 5, $numeric = 3, $other){

        $upper = chr(rand(65, 90));
        $lower = chr(rand(97, 122));
        $numeric = rand(0, 999);
        $other = chr(rand(33, 38));

        $contraseña = $upper.$lower.$numeric.$other;

        str_shuffle($contraseña);
    }

    randPass($upper, $lower, $numeric, $other);
    
