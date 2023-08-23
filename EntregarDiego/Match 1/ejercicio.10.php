<?php

$opcion = readline("Ingresa una opción del 1 al 5: ");

$resultado = match ($opcion) {
    1 => "Hora de bailar",
    2 => "A comer con alegria",
    3 => "Hora de leer un buen libro!",
    4 => "A correr y sentir la adrenalina!",
    5 => "Hora de descansar y dormir",
    default => "¡Opción invalida! Debes ingresar un número del 1 al 5."
};

echo $resultado;
?>
