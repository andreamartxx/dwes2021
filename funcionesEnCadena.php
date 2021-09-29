<?php

$nombre = $_GET["nombre"];

$prefijo = $_GET["prefijo"];

$nombre = trim($nombre, "/");

echo "Tu nombre es ".$nombre."<br>";

echo "La longitud del nombre es: ".strlen($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtoupper($nombre)."<br>";

echo "El nombre en mayúsculas: " .strtolower($nombre)."<br>";

echo $prefijo;

?>