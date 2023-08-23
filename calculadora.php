<?php

require_once ("classOperaciones.php");

$calculadora = new operaciones(1,2);

$rest = $calculadora -> suma();

echo $rest;