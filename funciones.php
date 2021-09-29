<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    
    <?php

    $tabla = "alumnos";

    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");

    //ejercicio1

        function insert($tabla, $campos){

            $columna = "";

            $columna2 = "";

            $cadena = "insert into alumnos ";

            foreach ($campos as $campo => $valor){

                $columna .= $campo .", ";

                $columna2 .= ":" .$campo .", ";

            }

            $columna =substr($columna, 0, -2);

            $columna2 =substr($columna2, 0, -2);

            $cadena .= "($columna) values ($columna2) <br>";

            return $cadena;

        }

        echo insert($tabla, $campos);
    
    //ejericio 2

        $texto = "insert into tabla (campos) values (valores)";
        
        function insertReferencia ($tabla, $campos, &$texto){	
            
            $columna = "";

            $columna2 = "";

            foreach ($campos as $campo => $valor){

                $columna .= $campo .", ";

                $columna2 .= ":" .$campo .", ";

            }

            $columna =substr($columna, 0, -2);

            $columna2 =substr($columna2, 0, -2);

            $texto = str_replace("tabla", $tabla, $texto);

            $texto = str_replace("campos", $columna, $texto);

            $texto = str_replace("valores", $columna2, $texto);

            return ($texto ."<br>");
        }
        
        echo insertReferencia($tabla, $campos, $texto);

    //ejercicio3

        $campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
        
        function update ($tabla, $campos){

            // print_r ($campos);

            $resultado = "";

            $sql = "UPDATE $tabla SET ";

            $sql2 = "";

            $cadenafinal = "";

            $identificador = array_key_first($campos);

            foreach ($campos as $campo => $valor){

                if($identificador == 0){

                /*salta */
                    
                    }else{   
                        
                        $resultado .= "$campo" ."=:" .$campo .", ";

                }

                $identificador++;

            }

           $resultado = substr($resultado, 0, -2);

            $sql2 = " WHERE " .$identificador ."= :" .$identificador ."<br>";

            $cadenafinal = $sql.$resultado.$sql2;
            
            return $cadenafinal;

        }

        echo update($tabla, $campos);

    //ejercicio4

        $operacion = 0;

        $num1 = 0;

        $num2 = 0;
        
        function resultadoOperacion($operacion, $num1, $num2){

            echo "$num1 $operacion $num1 = $resultado;

        }

        $suma = function($num1, $num2){
            return $num1 + $num2;
        };

        $resta = function($num1, $num2){
            return $num1 - $num2;
        };

        $multi = function($num1, $num2){
            return $num1 * $num2;
        };

        $div = function($num1, $num2){
            return $num1 / $num2;
        };

        echo resultadoOperacion($operacion, $num1, $num2);

//solución victor


      $operando1 = 0;

        $operando2 = 0;
    
	
        function realizaOperacion(callable $operacion, string $simbolo, int $operando1, int $operando2){
            echo "$operando1 $simbolo $operando2 =  {$operacion($operando1, $operando2)}";
        }
        $suma = function (int $operando1, int $operando2) {
            return $operando1 + $operando2;
        };
        $resta = function (int $operando1, int $operando2) {
            return $operando1 - $operando2;
        };
        
        $multiplicacion = function (int $operando1, int $operando2) {
            return $operando1 * $operando2;
        };
        $division = function (int $operando1, int $operando2) {
            return $operando1 / $operando2;
        };

        //echo $operacion(1, 2, "suma");
        //<h2>Anónima Suma</h2>
        echo realizaOperacion($suma, "+", 8, 2);
    
    ?>

</body>
</html>
	
	
	
