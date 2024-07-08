<?php

class Trapecio extends Shape {
    

    public function area() {   
        return (($this->parametros[0] + $this->parametros[1]) * $this->parametros[2]) / 2;
    }

}

?>