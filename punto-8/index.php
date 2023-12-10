<?php


//Tipo a  descuento del 30, b 25% y c 10%

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




//
if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B" || strtoupper($membershipType) == "C" || strtoupper($membershipType) == "D") 
 //strtouper es poner cualquier letra en mayuscula
if (strtoupper($membershipType) == "A")
    {
  $totalPay = $totalPay * 0.7;
    }
else if (strtoupper($membershipType) == "B") 

    {
      $totalPay = $totalPay * 0.75;
  }

  else if (strtoupper($membershipType) == "B") 

    {
      $totalPay = $totalPay * 0.75;
  }

      else if (strtoupper($membershipType) == "C") 

    {
      $totalPay = $totalPay * 0.90;
  }
else if (strtoupper($membershipType) == "D") 

  {
    $totalPay = $totalPay * 0.95;
}
//else (strtoupper($membershipType) == "C") 
//else
//  {
 //   $totalPay = $totalPay * 0.90;
  //}

  echo "El total a pagar es $" . number_format($totalPay);
?>