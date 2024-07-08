<?php

abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre():string {
        return $this->nombre;
    }

    public abstract function makeSound();

}