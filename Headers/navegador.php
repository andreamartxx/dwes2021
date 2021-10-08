<?php

    $browser = $_SERVER['HTTP_USER_AGENT'] ?? "";

    echo $_SERVER['HTTP_USER_AGENT'];

    $content ="";

    if(stripos($browser, 'Firefox')===FALSE){
         
        //stripos, busca la primera aparición de 'Firefox' en la URL.

        echo '<script type=text/javascript>alert("Cambia de navegador");</script>';

    }else{

        $content = "<br>". "Navegador Firefox";

    }

?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title>navegador header</title>

    <meta name="author" content="Andrea Martin">

</head>    

<body>

    <?= $content ?>

</body>

</html>
