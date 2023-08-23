<?php
$hora = readline("Escriba la hora en formato HH:MM: ");

$resultado = match($hora) {
    '06:00-08:00' => "Es hora de despertarse.",
    '08:00-12:00' => "Es hora del desayuno.",
    '12:00-14:00' => "Es hora del almuerzo.",
    '14:00-16:00' => "Es hora de la siesta.",
    '16:00-18:00' => "Es hora de la merienda.",
    '18:00-20:00' => "Es hora de la cena.",
    '20:00-22:00' => "Es hora de relajarse.",
    '22:00-24:00' => "Es hora de ir a dormir.",
    default => "Hora no válida."
};

echo $resultado;
?>