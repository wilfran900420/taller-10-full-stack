<?php

function ContrasenaSegura($pass);
{
  if (strlen($pass) > 8)
  {
    return true;
      }
  else
  {
    return false;
  }  
}
function ContrasenaLetraMayus($pass);
{
  return;
}
function ContrasenaTienenNum($pass);
{
  return;
}

?>