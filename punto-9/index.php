<?php

$multiplicador = 0;
# esta otra variable a a servir de comodin para que se ejecute la tabla
$x = 0;

#ingrese el numero multiplicador

// proceso---process
echo "Digite el numero para mostrar su tabla de multiplicar: \n";
$multiplicador = readline();

while ($x <= 30)
  {
echo $multiplicador . " X " .  $x . " = " . ($multiplicador * $x) . "\n";
    $x++;
}
?>