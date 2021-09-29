<?php

$nombre = $_GET["nombre"];

$prefijo = $_GET["prefijo"] ?? "";

$prefijoEncontrado = false;

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

echo $prefijo;

echo $prefijoEncontrado;

?>