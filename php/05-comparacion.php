<?php include '../includes/header.php';

// Definición de las variables
$num1 = 20;
$num2 = 30;
$num3 = 30;
$num4 = "30";

// Mayor que
var_dump($num1 > $num2);
echo "<br>";

// Menor que
var_dump($num2 > $num1);
echo "<br>";

// Mayor o igual que
var_dump($num2 >= $num1);
echo "<br>";

// Menor o igual que
var_dump($num2 <= $num1);
echo "<br>";

// Igual que
var_dump($num2 == $num3);
echo "<br>";

// Solo revisa el valor (==)
var_dump($num2 == $num4);
echo "<br>";

// Revisa el valor y el tipo de dato (===)
var_dump($num2 === $num4);
echo "<br>";

// -1 num1 < num2
var_dump($num1 <=> $num2);
echo "<br>";

// 0 num2 = num3
var_dump($num2 <=> $num3);
echo "<br>";

// 1 num2 > num1
var_dump($num2 <=> $num1);
echo "<br>";

include '../includes/footer.php';