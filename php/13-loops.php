<?php include '../includes/header.php';

// WHILE 
// Inicializador
$i = 0; 
while ($i<10) {
    echo $i. "<br>";
    $i++; //Incremento
}
echo "<br>";
echo "<br>";

// DO WHILE - La diferencia con el WHILE, es que este ejecuta el codigo y luego revisa la condición
//Inicializador
$i = 0;
do {
    echo $i."<br>";
    $i++; //Incremento
} while ($i < 10);
echo "<br>";
echo "<br>";

//FOR
for($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}
echo "<br>";
echo "<br>";

// EJERCICIO
/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir FIZZ BUZZ
 */
for ($i = 1; $i < 10; $i++){
    // Esta condición debe ser la primera 
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "-- FIZZ BUZZ <br/>";
    } else if ($i % 3 === 0) {
        echo $i . "-- Fizz <br/>";
    } else if ($i % 5 == 0) {
        echo $i . "-- Buzz <br/>";
    } else {
        echo $i . "<br/>";
    }
}
echo "<br>";
echo "<br>";

// FOR EACH 
// Arreglo
$clientes = array('Laura', 'Alejandra', 'Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente) {
    echo $cliente . "</br>";
}
echo "<br>";
echo "<br>";

// Extensión del arreglo 
echo count($clientes);
echo "<br>";
echo sizeof($clientes);
echo "<br>";
echo "<br>";

// Se puede llegar a lo mismo con for, pero consume más codigo
for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br/>";
}
echo "<br>";
echo "<br>";

// En un arreglo asoativo, el foreach va sobre los valores, no sobre las llaves
// Arreglo asociativo 
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 500,
    'tipo' => 'Premium'
];

// Foreach sobre los valores
foreach($cliente as $valor):
    echo $valor . "<br/>";
endforeach;
echo "<br>";
echo "<br>";

// Foreach sobre las llaves y los valores
foreach($cliente as $key => $valor):
    echo $key . "-" . $valor . "<br/>";
endforeach;

include '../includes/footer.php';