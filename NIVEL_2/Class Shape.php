<?php

abstract class Shape {
    protected $base;
    protected $altura;


    public function __construct(int $base, int $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    function getBase() {
        return $this->base;
    }
    function getAltura() {
        return $this->altura;
    }

    public abstract function area();

}