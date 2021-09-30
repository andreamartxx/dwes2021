<?php 

//Ejercicio1, array nombres

    $nombres = [
        "nombre" => "Andrea",
        "nombre1" => "Saúl",
        "nombre2" => "Carlos",
        "nombre3" => "Maria"
    ];    

    // print_r($nombres);

//Ejercicio2, contar elementos array

    print_r("Hay ".count($nombres). " elementos en el array nombres <br>");

//Ejercicio3, cadena de nombres

 $cadena_nombres = implode(", " , $nombres);

  echo "El array contiene los nombres ".$cadena_nombres."<br>";

//Ejercicio4, array ordenado alfabeticamente PREGUNTAR


 foreach ($nombres as $nombre => $valor){

   $orden_array = asort($nombres);

   }

   echo "El array ordenado alfabeticamente es: ".$orden_array."<br>";

//Ejercicio5, array en orden inverso PREGUNTAR

    $inverso = array_reverse($nombres, true);

    print_r($inverso)."<br>";

//Ejericio6, muestra posición nombre Andrea PREGUNTAR

    echo "La posición del nombre Andrea es ".array_search("Andrea",$nombres)."<br>";

//Ejercicio7, array alumnos, cada elemento contiene otro array

$alumnos = [
        "alumno" => array(
            "nombre" => "Andrea",
            "id" => 1,
            "edad" => "23"
        ),
        "alumno2" => array(
            "nombre" => "Saúl",
            "id" => 2,
            "edad" => "20"
        ),
        "alumno3" => array(
            "nombre" => "Carlos",
            "id" => 3,
            "edad" => "33"
        ),
        "alumno4" => array(
            "nombre" => "Maria",
            "id" => 4,
            "edad" => "22"
        )
    ];

//    print_r($alumnos);

//Ejercicio8, tabla HTML

    /* $tabla = '<table border="2">';
    foreach($alumnos as $columna){
        $tabla.='<tr>';
        foreach($tabla as $fila){
            $tabla.= '<td>'.$fila.'</td>';
        }
        $tabla.='</tr>';
    }
    $tabla.='</table>';

    echo $tabla; */

//Ejercicio9, array indexado solo sacando el nombre

    $indexado = array_column($alumnos, 'nombre');

    print_r($indexado)."<br>";

//Ejercicio10,  array numeros y suma total

$numeros = [3, 45, 78, 43, 2, 32, 56, 123, 8, 95];

echo "La suma de los 10 números es ".array_sum($numeros);

?>
