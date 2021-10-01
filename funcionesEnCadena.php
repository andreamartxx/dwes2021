<?php

$nombre = $_GET["nombre"] ?? "Andrea";

$nombre = trim($nombre, "/");

echo "Tu nombre es ".$nombre."<br>";

$prefijo = $_GET["prefijo"] ?? ""; //si es null devuelve un valor, 0, 1 o false

$prefijoEncontrado = stripos($nombre, $prefijo);

if($prefijoEncontrado === 0){

    echo "El prefijo coincide con el nombre <br>";

}else{

    echo "El prefijo no coincide con el nombre <br>";

}

echo "La longitud del nombre es: ".strlen($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtoupper($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtolower($nombre)."<br>";

echo "<br>";

echo "La letra 'a' aparece: " .substr_count((strtoUpper($nombre)),'A') ." veces <br >";

//posicion de la primera a

$posicionA=stripos($nombre, "a");

if(!is_int($posicionA)){

    echo "No hay ninguna 'a' en el nombre <br>";

}else{

    echo "La primera posición de la letra a es: " .($posicionA+1) ."<br>"; //se suma 1 porque la cadena empieza por 0

}

echo "El nombre después de la modificación: " .str_ireplace("o", 0, $nombre) ."<br>" ?? "No hay ninguna o en el nombre <br >";

echo "<br>";

echo "<h3>URL</h3>";

//URL

$url = 'http://username:password@hostname:9090/path?arg=value';

echo "Protocolo utilizado: " .parse_url($url, PHP_URL_SCHEME)."<br>";

echo "Username de la URL: " .parse_url($url, PHP_URL_USER)."<br>";

echo "Path de la URL: " .parse_url($url, PHP_URL_PATH)."<br>";

echo "QueryString de la URL: " .parse_url($url, PHP_URL_QUERY)."<br>";




?>
