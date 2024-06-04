<?php include '../includes/header.php';

// ARREGLO ASOCIATIVO
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisor 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
    ];

echo "<pre>";
var_dump($productos);

// De arreglo asociativo a string
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

// De string a un arreglo asociativo
$json_array = json_decode($json);

var_dump($json);
echo "<br>";
var_dump($json_array);
echo "</pre>";


include '../includes/footer.php';