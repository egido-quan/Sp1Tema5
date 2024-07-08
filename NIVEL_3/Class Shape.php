<?php

abstract class Shape {
    protected $base;
    protected $altura;
    protected $radio;

    // Constructor preaprado para recibir diferentes númerso de variables
    public function __construct(int ...$datos) { 
        if (func_num_args() == 2) {
            $this->base = func_get_arg(0);
            $this->altura = func_get_arg(1);
            $this->radio = 0;
        } else if (func_num_args() == 1) {
            $this->base = 0;
            $this->altura = 0;
            $this->radio = func_get_arg(0);
        } else { // Esto no debería pasar, si pasa pongo todo a cero
            $this->base = 1;
            $this->altura = 1;
            $this->radio = 1;
        }
    }

    function getBase() {
        return $this->base;
    }
    function getAltura() {
        return $this->altura;
    }

    function getRadio() {
        return $this->radio;
    }

    public abstract function area();

}