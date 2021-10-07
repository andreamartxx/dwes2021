<?php

    $array = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    for ($i=1; $i < count($array); $i++){

        $array2 = [array("$i" => [implode(" ", array_slice($array, $i)), implode(" ", array_slice($array, 0, $i))."<br>"])];
        
        print_r($array2);
        
    }


?>
