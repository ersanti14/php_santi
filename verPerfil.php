<?php

require_once("classUsuario.php");

$perfil = new usuarios(nombre: "Santiago", correo:"erazoser14@gmail.com", tipo:"user");

$nombre = $perfil -> ver_perfil();
$correo = $perfil -> ver_perfil();
$tipo = $perfil -> ver_perfil();


echo $nombre;
echo $correo;
echo $tipo;