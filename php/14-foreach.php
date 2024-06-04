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

//FOR EACH
foreach($productos as $producto) {
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
}
echo "<br>";
echo "<br>";

// HTML Y PHP
foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo '$' .  $producto['precio']; ?> </p>
        <?php
            if($producto['disponible']) {
                echo "<p>Disponible</p>";
            } else {
                echo "<p>No disponible </p>";
            }
        ?>
    </li>
    <?php
}
echo "<br>";
echo "<br>";

// HTML Y PHP + OPERADOR TERNARIO
foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo '$' .  $producto['precio']; ?> </p>
        <p> <?php echo($producto['disponible']) ? 'Disponible' : 'No disponible'; ?> </p>
    </li>
    <?php
}
echo "<br>";
echo "<br>";


include '../includes/footer.php';