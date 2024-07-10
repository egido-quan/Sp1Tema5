<?php

require "Forma.php";
require "Forma2Par.php";
require "Triangulo.php";
require "Rectangulo.php";
require "Circulo.php";



const NUM_SHAPES = 10;
$shapes = array();


//Creo varias figuras de diferentes tipos aletoriamente
for ($i = 0; $i < NUM_SHAPES; $i++) { 
    switch (rand(0,2)) {
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
            $shapes[] = new Circulo($radio);
            break;
 }
}

//Muestro los parámetors y las áreas de cada figura

for ($i = 0; $i < NUM_SHAPES; $i++) {
    switch (get_class($shapes[$i])) {
        case "Rectangulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Lado 1 = " . $shapes[$i]->getParam1() . ",  Lado 2 = " . $shapes[$i]->getParam2() . ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
        case "Triangulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Base = " . $shapes[$i]->getParam1() . ",  altura = " . $shapes[$i]->getParam2() . ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;
        case "Circulo":
            echo "Figura " . ($i+1) . ": " . get_class($shapes[$i]) . "<br> Radio = " . $shapes[$i]->getRadio() .  ", area = ";
            mostrarArea($shapes[$i]);
            echo "<br><br>";
            break;

    }

}


function mostrarArea(Forma $forma) {
    echo $forma->area();
}



?>