<?php
$edad = readline("Ingrese su edad: "); 
if ($edad >= 18) { 
  echo "Eres mayor de edad. ";
  
  $licencia = readline("¿Tienes licencia de conducir? (responde si o no): "); 

  if (strtolower($licencia) === "si") { 
    echo "correcto puedes conducir.";
  } else { 
    echo "No tienes licencia.";
  }
} else { 
  echo "No tienes la edad y no puedes conducir.";
}
