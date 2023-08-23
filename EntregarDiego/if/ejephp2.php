<?php
$nombre = readline("ingrese el nombre SANTI: ");

if ($nombre === "SANTI" || $nombre === "Santi" || $nombre === "santi") {
    echo "el nombre es correcto";
}
elseif ($nombre != "SANTI" or $nombre != "Santi"  or $nombre != "santi"){
    echo " el nombre es incorrecto intenta de new ";
}
