<?php include '../includes/header.php';

$carrito = ["Tablet", "TV", "Computadora"];

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

// Acceder algun elemento del array
echo $carrito[1];
echo "<br>";

// Agregar elemento en una posición indicada
$carrito[3] = "Telefono";
echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";

// Agregar elemento en la ultima posicion
array_push($carrito, "Audiofonos");

// Agregar elemento en la primera posicion
array_unshift($carrito, "SmartWatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";
echo "<br>";


// Otra forma de generar un array
$clientes = array("Cliente 1", "Cliente 2", "Cliente 3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";



include '../includes/footer.php';