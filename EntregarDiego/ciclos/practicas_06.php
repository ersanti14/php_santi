<?php
$liNumeros = readline(prompt:"ingrese cuantos numeros  va a trabajar \n");

$notas = [];
$sum = 0;

for($i=1; $i<=$liNumeros; $i++){

    $notas[$i-1] = floatval(readline(prompt:"ingrese las nota $i \n"));

    $sum += $notas[$i-1];

}

/* var_dump($notas); */
$promedio = $sum/$liNumeros;
echo("el promedio de las notas es igual: ".$promedio."\n")

?>