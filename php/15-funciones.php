<?php 
declare(strict_types=1); // Para ser más extrictos en los tipos de datos
include '../includes/header.php';



function sumar (int $num1 = 0,int $num2 = 0) {
    echo $num1 + $num2;
}

sumar(10,20);
echo "<br>";

sumar(105,240);
echo "<br>";

sumar(500);
echo "<br>";

//Parametros nombrados en PHP8
sumar(num1:500, num2:450);
echo "<br>";

sumar(num2:550, num1:455);
echo "<br>";

include '../includes/footer.php';