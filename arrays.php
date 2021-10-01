<?php 

echo "<h2>Arrays</h2>";

echo "<br>";

//Ejercicio1, array nombres

    $nombres = [
        "Andrea",
        "Saúl",
        "Carlos",
        "Maria"
    ];    

        print_r($nombres);

        echo "<br>";

        $asortNombres = $nombres; //array invertido, copiamos array

        asort($asortNombres);

        echo "<br>";

//Ejercicio2, contar elementos array

    print_r("Hay ".count($nombres). " elementos en el array nombres <br>");

//Ejercicio3, cadena de nombres

    $cadena_nombres = implode(" " , $nombres);

        echo "El array contiene los nombres ".$cadena_nombres."<br>";

//Ejercicio4, array ordenado alfabeticamente

    echo "El array ordenado alfabeticamente es: ".implode(", ", $asortNombres)."<br>";


//Ejericio6, muestra posición nombre Andrea

    $posicion = array_search("Andrea",$nombres);

        echo "La posición del nombre Andrea es ".($posicion+1)."<br>";

        echo "<br>";


//Ejercicio5, array en orden inverso

    $inverso = array_reverse($nombres, false);

        echo "<b>Array inverso:</b> <br>";

        print_r($inverso);

        echo "<br>";



    echo"<h3>Array de Array Asociativo</h3>";

//Ejercicio7, array alumnos, cada elemento contiene otro array

    $alumnos = [
                [
                "id" => 1,
                "nombre" => "Andrea",
                "edad" => "23"]
            ,
                ["id" => 2,
                "nombre" => "Saúl",
                "edad" => "20"]
            ,
                ["id" => 3,
                "nombre" => "Carlos",
                "edad" => "33"]
            ,
                ["id" => 4,
                "nombre" => "Maria",
                "edad" => "22"]
    ];

        print_r($alumnos);

        echo "<br>";

//Ejercicio8, tabla HTML

    echo "<h3>Tabla</h3>";

     $tabla = '<table border="2">';

     $contador = 0;

     foreach($alumnos as $campo){
        $tabla .= '<tr>';
        foreach($campo as $columna => $fila){
            $tabla .= '<td>'.$columna.'</td>';
            $contador++;
        }

        $tabla .= '</tr>';

        if($contador !=0){
            break;
        }
    }

    foreach($alumnos as $columna){
        $tabla .= '<tr>';
        foreach($columna as $fila){
            $tabla .= '<td>'.$fila.'</td>';
        }
            $tabla .= '</tr>';
    }
        $tabla .= '</table>';

    echo $tabla;

//Ejercicio9, array indexado solo sacando el nombre

    echo "<h3>Array indexado solo con el nombre</h3>";

    $indexado = array_column($alumnos, 'nombre');

    print_r($indexado);

    echo "<br>";

//Ejercicio10,  array numeros y suma total

    echo "<h3>Array suma números</h3>";

    $numeros = [3, 45, 78, 43, 2, 32, 56, 123, 8, 95];

    print_r($numeros);

    echo "<br>";

    echo "La suma de los 10 números es ".array_sum($numeros);

?>
