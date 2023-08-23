<?php

function placa()
{

    $abecedario = array('a', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'n', 'm', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    $letrasAleatorias = array_rand($abecedario, 3);

    $variableAleatoria = $abecedario[$letrasAleatorias[0]] . $abecedario[$letrasAleatorias[1]] . $abecedario[$letrasAleatorias[2]];

    $numeros = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

    $numerosA = array_rand($numeros, 3);

    $varNumero = $numeros[$numerosA[0]] . $numeros[$numerosA[1]] . $numeros[$numerosA[2]];

    $placa = $variableAleatoria . $varNumero;
    return $placa;
}

$placaFinal = placa();
echo "su placa es: " . $placaFinal;




function generarPlaca()
{
    $abecedario = array('a', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'n', 'm', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    $letrasAleatorias = array_rand($abecedario, 3);
    $variableAleatoria = $abecedario[$letrasAleatorias[0]] . $abecedario[$letrasAleatorias[1]] . $abecedario[$letrasAleatorias[2]];

    $numeros = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $numerosA = array_rand($numeros, 3);
    $varNumero = $numeros[$numerosA[0]] . $numeros[$numerosA[1]] . $numeros[$numerosA[2]];

    $placa = $variableAleatoria . $varNumero;
    return $placa;
}

$placaGenerada = generarPlaca();
echo "Su placa es: " . $placaGenerada;

?>

