<?php

function repartirCartas() {
    $mazo = [
        "As de Corazones", "2 de Corazones", "3 de Corazones", "4 de Corazones", "5 de Corazones",
        "6 de Corazones", "7 de Corazones", "8 de Corazones", "9 de Corazones", "10 de Corazones",
        "Jota de Corazones", "Reina de Corazones", "Rey de Corazones",
        "As de Diamantes", "2 de Diamantes", "3 de Diamantes", "4 de Diamantes", "5 de Diamantes",
        "6 de Diamantes", "7 de Diamantes", "8 de Diamantes", "9 de Diamantes", "10 de Diamantes",
        "Jota de Diamantes", "Reina de Diamantes", "Rey de Diamantes",
        "As de Tréboles", "2 de Tréboles", "3 de Tréboles", "4 de Tréboles", "5 de Tréboles",
        "6 de Tréboles", "7 de Tréboles", "8 de Tréboles", "9 de Tréboles", "10 de Tréboles",
        "Jota de Tréboles", "Reina de Tréboles", "Rey de Tréboles",
        "As de Picas", "2 de Picas", "3 de Picas", "4 de Picas", "5 de Picas",
        "6 de Picas", "7 de Picas", "8 de Picas", "9 de Picas", "10 de Picas",
        "Jota de Picas", "Reina de Picas", "Rey de Picas"
    ];
    
    $mano = [];
    
    while (count($mano) < 5) {
        $cartaAleatoria = array_rand($mazo);
        $carta = $mazo[$cartaAleatoria];
        
        // Verificar si la carta ya ha sido repartida
        if (!in_array($carta, $mano)) {
            $mano[] = $carta;
        }
    }
    
    return $mano;
}

function mostrarCartas($cartas) {
    foreach ($cartas as $carta) {
        echo $carta . "\n";
    }
}

function evaluarMano($cartas) {
    // Implementar la evaluación de la mano según las reglas del Poker
    // Aquí puedes utilizar estructuras condicionales y funciones adicionales si es necesario
    
    // Ejemplo: Mostrar la mano del jugador
    echo "Mano del jugador:\n";
    mostrarCartas($cartas);
}

// Programa principal

$manoJugador = repartirCartas();

echo "Cartas repartidas:\n";
mostrarCartas($manoJugador);

evaluarMano($manoJugador);

?>
