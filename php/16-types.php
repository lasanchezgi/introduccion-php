<?php 
declare(strict_types=1);
include '../includes/header.php';

// Para retornar datos
function usuario_autenticado(bool $autenticado) : string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return "No autenticado";
    }
}

// Si la función se va a dedicar a imprimir algo se le pone void
function usuario_autenticado1(bool $autenticado) : void {
    if($autenticado) {
        echo "El usuario esta autenticado";
    } else {
        echo "No autenticado";
    }
}


$usuario = usuario_autenticado(true);
echo $usuario; 
echo "<br>";
echo "<br>";

$usuario = usuario_autenticado1(false);
echo $usuario; 
echo "<br>";
echo "<br>";




include '../includes/footer.php';