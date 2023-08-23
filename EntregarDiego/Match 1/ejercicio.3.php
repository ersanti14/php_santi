<?php
    $num = readline("Ingrese una letra: ");

    $resultado = match (strtolower($num)) {
        'a','e','i','o','u' => "Esto es una vocal",
        default => "No es vocal, es una letra del abcedario,,,"
    };
    echo $resultado;
?>
