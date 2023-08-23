<?php

$precioInicial = floatval(readline("ingrese el precio: "));
$descuento = floatval(readline("ingrese el descuneto: "));

echo calcularDescuento($precioInicial,$descuento);

function calcularDescuento(float $precioOriginal, $porcentajedescuento):float{
    $descuento = $porcentajedescuento / 100;
    $valorconDes = $precioOriginal - ($precioOriginal*$descuento);

    echo "el producto tiene un costo de ".$precioOriginal."el descuento es de ".$descuento."tiene un valor con descuento de ".$valorconDes;

    return $valorconDes;
}


?>