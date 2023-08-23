<?php
    $dia = readline("Escriba el dia: ");
    $mes = readline("Escriba el mes: ");
    $year = readline("Escriba el año: ");

    $fecha = match ($mes) {
        '01' => "Mes de año nuevo",
        '02' => "Mes del 14 de febrero",
        '03' => "Mes de mi cumpleaños",
        '04' => "Mes que se pasa volando",
        '05' => "Mes de la muejer",
        '06' => "Mes mitad de año",
        '07' => "Mes de la independencia",
        '08' => "Mes del cumple de mi papa y hermano",
        '09' => "Mes de que¿?",
        '10' => "Mes de Halloween",
        '11' => "Y se acabo el año",
        '12' => "Navidad",
        default => "No esa fecha"
    };
    echo $fecha;
?>
