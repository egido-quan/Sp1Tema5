<?php

require "Class Shape.php";
require "Class Triangulo.php";
require "Class Rectangulo.php";

const NUM_SHAPES = 10;

$shapes = array();

for ($i = 0; $i < NUM_SHAPES; $i++) {
    $base = rand(1,20);
    $altura = rand(1,20);

   $shapes[] =  (rand(0,1)) ? new Triangulo($base, $altura) : new Rectangulo($base, $altura);
}

FOR ($i = 0; $i < NUM_SHAPES; $i++) {
    echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Base = " . $shapes[$i]->getBase() . ",  altura = " . $shapes[$i]->getAltura() . ", area = ";
    mostrarArea($shapes[$i]);
    echo "<br><br>";

}


function mostrarArea(Shape $shape) {
    echo $shape->area();
}



?>