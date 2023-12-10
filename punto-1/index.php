<?php
echo "Hello, world!\n";
//Definicion de datos (inputs)
$name = "";
const welcome = "Hola bienvenido";

//process
echo "digite su nombre completo por favor \n ";
// redlina pide por consola un dato que el usuario debe ingresar y lo lleva automaticamente al tipo de dato requerido, por ejemplo entero, decimal
$name = readline();

echo "digite su nombre completo por favor \n ";

$name2 = readline();

//Output
echo welcome ." ". $name;

?>