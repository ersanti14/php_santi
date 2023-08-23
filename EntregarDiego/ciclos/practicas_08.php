<?php

$numero = intval(readline("Ingrese un número pa saber su factorial: "));


$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}


echo "El factorial de $numero es: $factorial\n";
?>
