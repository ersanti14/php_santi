<?php
$i = 1;
$q = readline("Ingrese un número para imprimir su tabla de multiplicación: ");
$tab = 0;

if ($q <= 12) {
    while ($i <= 10) {
        $tab = $q * $i;
        echo $q . " x " . $i . " = " . $tab . "\n";
        $i++;
    }
} else {
    echo "El número ingresado debe ser menor o igual que 12...";
}

?>