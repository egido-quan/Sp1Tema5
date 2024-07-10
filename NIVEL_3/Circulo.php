<?php



class Circulo implements Forma {    
    //Atributos
    private int $radio;


    public function __construct(int $radio) {
        $this->radio = $radio;
        }    

    //Getter 
    public function getRadio():int {
        return $this->radio;
    }

    public function area():float {   
        return pi() * ($this->radio * $this->radio);
    }

}

?>