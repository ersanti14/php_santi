<?php

$dia = readline("Ingresa un dia: ");

$resultado = match ($dia){

    $dia === 1 =>'Lunes',
    $dia === 2 =>'Martes',
    $dia === 3 =>'Miercoles',
    $dia === 4 =>'Jueves',
    $dia === 5 =>'Viernes',
    $dia === 6 =>'Sabado',
    $dia === 7 =>'Domingo',

    default => "Eso no existe"
};

echo $resultado;
?>