<?php

require "Class Animal.php";
require "Class Perro.php";
require "Class Gato.php";

$nombres = ["Lucas", "Pulgas", "Pecas", "Nico", "Luna", "Blu", "Nino", "Santa"];
$animales = [];

function escucharAnimal(Animal $animal):void {
    echo $animal->makeSound();
}

//Asignamos gato o perro aleatoriamente a cada nombre de la lista
for ($i = 0; $i < count($nombres); $i++) { 
    (rand(0,1)) ? $animales[] = new Gato($nombres[$i]) : $animales[] = new Perro($nombres[$i]);
}

//Cada animal hará el sonido que le corresponde
for ($i = 0; $i < count($nombres); $i++) {
    echo "El " . get_class($animales[$i]) . " " . $animales[$i]->getNombre() . " hace ";
    escucharAnimal($animales[$i]);
    echo "<br><br>";
}

?>