<?php include '../includes/header.php';

// Arreglo
$carrito = ['Tablet', 'TV', 'Computadora'];

//in_array - Buscar elementos en un arreglo
var_dump(in_array('Tablet', $carrito));
echo "<br>";
var_dump(in_array('Audifonos', $carrito));
echo "<br>";

// Ordenar elementos de un arreglo indexado
$nums = array(5,6,87,94,36,1,5459,789156);
sort($nums); // De menor a mayor
rsort($nums);  // De mayor a menor

echo "<pre>";
var_dump($nums);
echo "</pre>";

// Ordenar arreglo asociativo
// Arreglo
$cliente = array (
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

// Imprimir arreglo
echo "<pre>";
var_dump($cliente);
echo "</echo>";

// Ordena por valores, primero los numeros (de menor a mayor), luego los strings (orden alfabetico)
asort($cliente);
// Ordena por valores, primero los numeros (de mayor a menor), luego los strings (orden alfabetico inverso)
arsort($cliente);

// Ordena por llaves (orden alfabetico) A --> Z 
ksort($cliente);
// Ordena por llaves (orden alfabetico inverso) Z --> A
krsort($cliente);

// Imprimir arreglo
echo "<pre>";
var_dump($cliente);
echo "</echo>";


include '../includes/footer.php';