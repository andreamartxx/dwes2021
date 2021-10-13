<?php

    header('Content-Type: text/csv');

    header('Content-Disposition: attachment; filename="productos.csv"');

    $productos = [
        ["id" => 1, "Producto" => "producto1", "precio" => 15 ], 
        ["id" => 2, "Producto" => "producto2", "precio" => 25 ], 
        ["id" => 3, "Producto" => "producto3", "precio" => 10 ], 
        ["id" => 4, "Producto" => "producto4", "precio" => 5 ],
    ];

    function productoCSV($productos){

        $prod="";
   
        $contador = 0;
   
        foreach($productos as $campo){
           foreach($campo as $columna => $fila){
               $prod .= "$columna;";
               $contador++;
           }
           $prod .= "\n";
           if($contador !=0){
               break;
           }
       }
   
       foreach($productos as $columna){
           foreach($columna as $fila){
               $prod .= "$fila;";
           }
               $prod .= "\n";
       }
        return $prod;
    }

    echo productoCSV($productos);

?>
