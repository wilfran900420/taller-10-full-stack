<?php

  // Declaracion de Datos de entrada
  const TICKET_PRICE = 25000;
  $membershipType = "";
  $personNumber = 0;

  // Proceso
  echo "Digite el numero de personas que entraran a la bolera: \n";
  $personNumber = readline();

  echo "Digite el tipo de membresia: \n";
  $membershipType = readline();


  $totalPay = $personNumber * TICKET_PRICE;

if ($membershipType == "A" || $membershipType =="B") 

if ($membershipType == "A")
    {
  $totalPay = $totalPay * 0.7;
    }
else if ($membershipType == "B") 

    {
      $totalPay = $totalPay * 0.7;
  }
 
  echo "El total a pagar es $" . ($totalPay);
?>