<?php
//mostar los numeros pares del 0 al 100 y la sumatoria

  $total = 0;


for($number = 0;  $number<=100; $number = $number + 2){
  echo $number. "\n";
  $total = $total + $number ;  
}
 echo "la suma total de los numeros es " . $total ;

?>