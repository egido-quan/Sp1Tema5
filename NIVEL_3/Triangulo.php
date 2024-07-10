

<?php

class Triangulo extends Forma2Par implements Forma {    
    //Atributos

    
    public function area() {   
        return ($this->param1 * $this->param2) / 2;
    }

}


?>