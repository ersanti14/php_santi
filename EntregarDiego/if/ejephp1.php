<?php

$numero1 = readline("Escriba un numero: ");
$numero2 = readline("Escriba un numero: ");


if($numero1===$numero2){
    echo "es igual a 10";
}


elseif($numero2 < $numero1){
    echo "es menor que 10";
}


elseif($numero1 < $numero2){
    echo "es mayor que 10";
}

?>