<?php
$entero = readline("Ingrese un numero del 1 a 3");

$a = 1;
$b = 2;
$c = 3;

$resultado = match ($entero){

    $a => "Buenos dias",
    $b => "A la ordn",
    $c => "Si señorr",

    default => "No es valido"

};

echo $resultado;

?>

