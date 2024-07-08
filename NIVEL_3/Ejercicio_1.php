<?php

require "Class Shape.php";
require "Class Triangulo.php";
require "Class Rectangulo.php";
require "Class Circulo.php";


const NUM_SHAPES = 10;
$shapes = array();

//Creo varios shapes  de diferentes tipos aletoriamente
for ($i = 0; $i < NUM_SHAPES; $i++) { 
    switch (rand(0,2)) {
        case 0: //Es rectángulo
            $base = rand(1,20); //genero las medidas aleatoriamente
            $altura = rand(1,20);
            $shapes[] = new Rectangulo(rand(1, 20), rand (1,20));
            break;
        case 1: //Es triángulo
            $base = rand(1,20);
            $altura = rand(1,20);
            $shapes[] = new Triangulo(rand(1, 20), rand (1,20));
            break;
        case 2: //Es círculo
            $radio = rand(1, 20); //genero el radio aleatoriamente
            $shapes[] = new Circulo(rand(1, 20)); //Solo un parámetro, el radio

    }
}

//Muestro las áreas de cada shape
for ($i = 0; $i < NUM_SHAPES; $i++) {
    if (get_class($shapes[$i]) == "Triangulo" || get_class($shapes[$i]) == "Rectangulo") {
        echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Base = " . $shapes[$i]->getBase() . ",  altura = " . $shapes[$i]->getAltura() . ", area = ";
        mostrarArea($shapes[$i]);
        echo "<br><br>";
    } else {
        echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Radio = " . $shapes[$i]->getRadio() .  ", area = ";
        mostrarArea($shapes[$i]);
        echo "<br><br>";
    }

}


function mostrarArea(Shape $shape) {
    echo $shape->area();
}



?>