<?php

$nota = readline("Ingrese su nota del 0 al 100: ") ;

$resultado = match ($nota){
    $nota === 10 => "Reprobaste",
    $nota === 20 => "Esfuerzate mas ",
    $nota === 30 => "Nota baja",
    $nota === 40 => "Repasa mas",
    $nota === 50 => "un poco mas",
    $nota === 60 => "Aceptable",
    $nota === 70 => "Buen trabjo",
    $nota === 80 => "Muy bien",
    $nota === 90 => "Exelente",
    $nota === 100 => "Felicidades",

    default => "Nota no valida, intenta nuevamente"
};

echo $resultado;

?>