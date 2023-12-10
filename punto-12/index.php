<?php

//Declaración de datos de entrada
// i arranca en un para los pares

echo "digite el numero a multiplicar". "\n";

$inumeromultiplicar = readline();
$factorial = 1;

for($i = 0;  $i <= 30; $i++ )   

{

  echo $inumeromultiplicar . " X " .  $i . " = " . ($inumeromultiplicar * $i) . "\n";
  

} 


?>