<?php


function placa(){
    
$abecedario = array('a', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'n', 'm', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$numeros = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

$resultados = array();

for ($i = 0; $i < 10; $i++) {
    $letrasAleatorias = array_rand($abecedario, 3);
    $numerosAleatorios = array_rand($numeros, 3);

    $variableAleatoria = $abecedario[$letrasAleatorias[0]] . $abecedario[$letrasAleatorias[1]] . $abecedario[$letrasAleatorias[2]];
    $varNumero = $numeros[$numerosAleatorios[0]] . $numeros[$numerosAleatorios[1]] . $numeros[$numerosAleatorios[2]];

    $placa = $variableAleatoria . $varNumero;
    $resultados[] = $placa;
}
}



// Mostrar los resultados
foreach ($resultados as $indice => $placa) {
    echo "Placa $indice: $placa<br>";
}

// Ahora $resultados contiene las 10 placas aleatorias en forma de array
?>
