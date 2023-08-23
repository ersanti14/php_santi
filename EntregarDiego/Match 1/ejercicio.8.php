
<?php
    $palabra = readline("Ingresa cualquier palabra ");

    $resultado = match(true){
        strlen($palabra) >= 10 =>"Esta es una cadena larga",
        default => "Es una cadena corta"
    };
    echo $resultado;
?>