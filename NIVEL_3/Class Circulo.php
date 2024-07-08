<?php

class Circulo extends Shape {    
    //Atributos
    private const PI = 3.14159;

    public function area() {   
        return self::PI * $this->parametros[0] * $this->parametros[0];
    }
}