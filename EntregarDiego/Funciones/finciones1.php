<?php
function suma(int $a, int $b):int{
    $resultado = $a + $b;
    return $resultado;
}

$a = readline("ingrse un numero 1 \n");

$b = readline("ingrse un numero 2 \n");

echo "el resultado de la suma es ".suma($a,$b);  