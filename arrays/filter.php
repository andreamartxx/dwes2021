<?php 

    echo "<h2>Filtros</h2>";

    $contactos = array (

        array("codigo" => 1, "nombre" => "Juan Perez", "telefono" => "966112233", "email" => "juanp@gmail.com"),

        array("codigo" => 2, "nombre" => "Ana López", "telefono" => "965667788", "email" => "anita@hotmail.com"),

        array("codigo" => 3, "nombre" => "Mario Montero", "telefono" => "9659299190", "email" => "mario.mont@gmail.com"),

        array("codigo" => 4, "nombre" => "Laura Martínez", "telefono" => "611223344", "email" => "lm2000@gmail.com"),

        array("codigo" => 5, "nombre" => "Nora Jover", "telefono" => "638765432", "email" => "norajover@hotmail.com"),

    );

    print_r($contactos);

    $filtrarPor = strtolower($_GET["filtrarPor"] ?? " ");

    $filtrados = array_filter($contactos,
    
        function($contacto) use ($filtrarPor){

            return strpos(strtolower($contacto["email"]), $filtrarPor) !== FALSE;
        });

    print_r($filtrados);

?>
