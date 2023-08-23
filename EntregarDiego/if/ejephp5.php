
<?php

echo "Ingrese el primer número: ";
$numero1 = fgets(STDIN);

echo "Ingrese el segundo número: ";
$numero2 = fgets(STDIN);

if ($numero1 >= 10 && $numero2 >= 10) {
    echo "Los dos números tienen un valor superior o igual a 10.";
} elseif ($numero1 >= 10 || $numero2 >= 10) {
    echo "Al menos uno de los valores tiene un valor superior a 10.";
} else {
    echo "Todos los números tienen un valor  inferior a 10.";
}

?>