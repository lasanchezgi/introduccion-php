<?php include '../includes/header.php';

$nombre_cliente = "Laura Alejandra";

// Extención de un string
echo strlen($nombre_cliente);
echo "<br>";

var_dump($nombre_cliente);
echo "<br>";

// Eliminar espacios en blanco
$texto = trim($nombre_cliente);
echo strlen($texto);
echo "<br>";

// Convertir a mayusculas
echo strtoupper($nombre_cliente);
echo "<br>";

// Convertir a minusculas
echo strtolower($nombre_cliente);
echo "<br>";


// Verificando correos
$mail1 = "correo@correo.com";
$mail2 = "CORREO@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";

// Buscar y reemplazar
// Podemos notar como el nombre de los metodos no son consistentes en PHP
echo str_replace("Laura", "L", $nombre_cliente);
echo "<br>";

// Revisar si un string existe o no 
// Dice en que posición se encuentra
echo strpos($nombre_cliente, 'Alejandra');
echo "<br>";

// Si no existe, no imprime nada
echo strpos($nombre_cliente, 'Ana');
echo "<br>";

// Unir / Concatenar
$tipo_cliente = "Premium";
echo "El cliente " . $nombre_cliente . " es " . $tipo_cliente;
echo "<br>";

echo "El cliente1 {$nombre_cliente} es {$tipo_cliente}";
echo "<br>";

include '../includes/footer.php';