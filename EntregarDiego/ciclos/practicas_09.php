<?php

$palabra = readline("Ingrese una palabra para saber si es palindromo: ");


$palabra = strtolower(str_replace(' ', '', $palabra));


$reversa = strrev($palabra);


if ($palabra === $reversa) {
    echo "La palabra '$palabra' es un palíndromo.\n";
} else {
    echo "La palabra '$palabra' no es un palíndromo.\n";
}
?>
