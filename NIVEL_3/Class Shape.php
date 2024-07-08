<?php

abstract class Shape {
    //Guardaré los atributos en un array, pues la cantidad depende del tipo de figura
    protected $parametros = []; 

    // Constructor escalable (en cantidad de atributos)
    public function __construct(int ...$datos) {
        for ($i = 0; $i < func_num_args(); $i++) {
            $this->parametros[$i] = func_get_arg($i);
        }
    }

    //Getter para cada elemento del array
    public function getParametro_i($i) {
        return $this->parametros[$i];
    }

    public abstract function area();

}