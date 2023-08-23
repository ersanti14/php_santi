<?php

$cantidadCompra = readline("ingrese la cantudad de equipos que va compar: ");

$precio = 700;


if($cantidadCompra <= 0)
{
    echo "no aplica descuento";
}

elseif($cantidadCompra < 5)
{
    $des = $cantidadCompra*($precio - ($precio * 0.10));

echo "el total es $des pesos con un descuento del 10%";
}

elseif($cantidadCompra >= 5 && $cantidadCompra < 10)
{
    $des = $cantidadCompra*($precio - ($precio * 0.20));

echo "el total es $des pesos con un descuento del 20%";
}

elseif($cantidadCompra >= 10 )
{
    $des = $cantidadCompra*($precio - ($precio * 0.40));

echo "el total es $des pesos con un descuento del 40%";
}

?>  