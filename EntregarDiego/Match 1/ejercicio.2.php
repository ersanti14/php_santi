<?php
$color = readline("Escriba un color: ");

$respuesta  = match ($color){
    'Blanco' => 'El color es simple',
    'Rojo' => 'El color es calido',
    'Rosado' => 'El color es clarito',
    'Negro' => 'El color es oscuro',

    default => 'color desconocido'
};

echo $respuesta;
?>
