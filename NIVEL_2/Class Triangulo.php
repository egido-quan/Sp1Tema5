<?php

class Triangulo extends Shape {

    public function area() {   
        return ($this->base * $this->altura) / 2;
    }

}

?>