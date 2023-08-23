<?php 
    function esPalindromo($palabra) {
    $palabra = strtolower(str_replace(' ', '', $palabra));
    $reversa = strrev($palabra);

    if ($palabra === $reversa) {
        return true;
    } else {
        return false;
    }
}

$palabra = readline("Ingrese una palabra para saber si es palíndromo: ");

if (esPalindromo($palabra)) {
    echo "La palabra '$palabra' es un palíndromo.\n";
} else {
    echo "La palabra '$palabra' no es un palíndromo.\n";
}
