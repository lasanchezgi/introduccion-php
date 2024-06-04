<?php include '../includes/header.php';

$clientes = [
    'nombre' => 'Laura',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
    ];

echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";

echo $clientes['nombre'];
echo "<br>";

echo $clientes['saldo'];
echo "<br>";

echo $clientes['informacion']['tipo'];
echo "<br>";

echo "<pre>";
var_dump($clientes['informacion']);
echo "</pre>";
echo "<br>";

// Agregar una propiedad al arreglo
$clientes['codigo'] = 167624623565;
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";

// Sobreescribir una propiedad al arreglo
$clientes['saldo'] = 1000000;
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo "<br>";


include '../includes/footer.php';