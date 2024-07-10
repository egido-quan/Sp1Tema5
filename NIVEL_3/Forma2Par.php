<?php

abstract class Forma2Par {
    //Guardaré los atributos en un array, pues la cantidad depende del tipo de figura
    protected int $param1;
    protected int $param2;

    //Constructor
    public function __construct(int $param1, int $param2) {
        $this->param1 = $param1;
        $this->param2 = $param2;
        }

    //Getter
    public function getParam1(): int {
         return $this->param1;
        }

    public function getParam2(): int {
        return $this->param2;
        }

}
?>