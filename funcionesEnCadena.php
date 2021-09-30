<?php

$nombre = $_GET["nombre"];

$prefijo = $_GET["prefijo"] ?? "";

$prefijoEncontrado = stripos($nombre, $prefijo);

if($prefijo !=null){

    if($prefijoEncontrado === 0){

        echo "El prefijo coincide con el nombre <br>";

    }else{

        echo "El prefijo no coincide con el nombre <br>";

    }
}

$nombre = trim($nombre, "/");

echo "Tu nombre es ".$nombre."<br>";

echo "La longitud del nombre es: ".strlen($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtoupper($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtolower($nombre)."<br>";

echo "La letra 'a' aparece: " .strtoupper(substr_count($nombre, 'a')) ." veces <br >";

echo "El nombre después de la modificación: " .str_ireplace("o", "0", "nombre") ."<br>" ?? "No hay ninguna o en el nombre <br >";

echo $prefijo;

echo $prefijoEncontrado;

//URL

$url = 'http://username:password@hostname:9090/path?arg=value';

echo "Protocolo utilizado: " .parse_url($url, PHP_URL_SCHEME)."<br>";

echo "Username de la URL: " .parse_url($url, PHP_URL_USER)."<br>";

echo "Path de la URL: " .parse_url($url, PHP_URL_PATH)."<br>";

echo "QueryString de la URL: " .parse_url($url, PHP_URL_QUERY)."<br>";




?>
