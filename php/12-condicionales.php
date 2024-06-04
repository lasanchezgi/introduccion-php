<?php include '../includes/header.php';

$autenticado = false;
$admin = false;

// OR
if($autenticado || $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}
echo "<br>";

// AND
if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión";
}
echo "<br>";

// IF ANIDADOS
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
    ];

if (!empty($cliente)){
    echo "El arreglo de cliente no esta vacio";
    if ($cliente['saldo']>0){
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}
echo "<br>";

// ELSE IF
if ($cliente['saldo']>0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo']=='Premium') {
    echo "El cliente es Premium";
} else {
    echo "No hay cliente definido, no tiene saldo, o no es premium";
}
echo "<br>";
echo "<br>";

// SWITCH 
$lenguaje = 'HTML';
switch($lenguaje) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "<3";
        break;
    default:
        echo "Algun otra lenguaje";
        break;
}


include '../includes/footer.php';