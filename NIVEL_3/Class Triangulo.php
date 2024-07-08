<?php

class Triangulo extends Shape {
    

    public function area() {   
        return ($this->parametros[0] * $this->parametros[1]) / 2;
    }

}

?>