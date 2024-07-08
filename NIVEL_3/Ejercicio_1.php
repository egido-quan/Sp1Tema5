<?php

require "Class Shape.php";
require "Class Triangulo.php";
require "Class Rectangulo.php";
require "Class Circulo.php";
require "Class Trapecio.php";


const NUM_SHAPES = 10;
$shapes = array();

//Creo varias figuras de diferentes tipos aletoriamente
for ($i = 0; $i < NUM_SHAPES; $i++) { 
    switch (rand(0,3)) {
        case 0: //Es rectángulo
            $lado1 = rand(1,20); //genero las medidas aleatoriamente
            $lado2 = rand(1,20);
            $shapes[] = new Rectangulo($lado1, $lado2);
            break;
        case 1: //Es triángulo
            $base = rand(1,20);
            $altura = rand(1,20);
            $shapes[] = new Triangulo($base, $altura);
            break;
        case 2: //Es círculo
            $radio = rand(1, 20); //genero el radio aleatoriamente
            $shapes[] = new Circulo($radio); //Solo un parámetro, el radio
            break;
        case 3: //Es trapecio
            $baseLarga = rand(1,20);
            $baseCorta = rand(1,20);
            $altura = rand(1,20);
            $shapes[] = new Trapecio($baseLarga, $baseCorta, $altura);
            break;
    }
}

//Muestro los parámetors y las áreas de cada figura

for ($i = 0; $i < NUM_SHAPES; $i++) {
    switch (get_class($shapes[$i])) {
        case "Rectangulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Lado 1 = " . $shapes[$i]->getParametro_i(0) . ",  Lado 2 = " . $shapes[$i]->getParametro_i(1) . ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
        case "Triangulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Base = " . $shapes[$i]->getParametro_i(0) . ",  altura = " . $shapes[$i]->getParametro_i(1) . ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
        case "Circulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Radio = " . $shapes[$i]->getParametro_i(0) .  ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
        case "Trapecio":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Base larga = " . $shapes[$i]->getParametro_i(0) . ", Base corta = "
            . $shapes[$i]->getParametro_i(1) .",  altura = " . $shapes[$i]->getParametro_i(2) . ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
    }
        



}



function mostrarArea(Shape $shape) {
    echo $shape->area();
}



?>