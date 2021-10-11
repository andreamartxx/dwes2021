<?php

    $id = $_GET["id"] ?? ""; 

    $productos = ["1" => "Producto1", "2" => "Producto2", "3" => "Producto3"];

    echo "<br>";

    if(array_key_exists($id, $productos)){
                
       echo "El producto está en el array";

    }else{

        echo "ERROR 404 <br>".http_response_code(404);

    }

    

?>
