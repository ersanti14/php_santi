<?php

require_once("classUsuario.php");

$usuario1 = new usuarios(nombre: "Santiago", correo:"erazoser14@gmail.com", tipo:"user");

$perfil = $usuario1 ->ver_perfil();

echo $perfil;

echo "<br><br><br><br><br>";

$danna = new usuarios(nombre: "danna", correo: "danna@gmail.com", tipo:"admi");

$perfilDanna = $danna ->ver_perfil();

echo $perfilDanna;