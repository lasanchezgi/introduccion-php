<?php include '../includes/header.php';

$clientes1 = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Laura',
    'saldo' => 550
];

// Función Empty, es muy util para revisar si un arreglo esta vacio o no
// Empty - Revisar si un arreglo esta vacio
// True: Esta vacio
// False: Tiene elementos
var_dump(empty($clientes1));
echo "<br>";
var_dump(empty($clientes2));
echo "<br>";
var_dump(empty($clientes3));
echo "<br>";
echo "<br>";

// Función Isset, revisa si una propiedad o si un arreglo ha sido creado o esta definido 
// Isset - Revisar si un arreglo esta creado o una propiedad esta definida
var_dump(isset($clientes4));
echo "<br>";
var_dump(isset($clientes1));
echo "<br>";
var_dump(isset($clientes2));
echo "<br>";
var_dump(isset($clientes3));
echo "<br>";
echo "<br>";

var_dump(isset($cliente['nombre']));
echo "<br>";
var_dump(isset($cliente['tipo']));
echo "<br>";

include '../includes/footer.php';