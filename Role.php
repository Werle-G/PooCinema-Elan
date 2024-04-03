<?php

class Role{



    private string $name;

    private array $castings = [];

    //---------------Construct-----------------


    public function __construct(string $name){
        $this->name = $name;
    }

    //------------------------------------


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    //------------------methode-----------------


    public function addCasting(Casting $casting){
        $this->castings[] = $casting;
    }


    public function __toString(){
        return "{$this->name}";
    }
    
    public function played() {

        echo "Le rôle de $this a été joué par :<br>";
        foreach ($this->castings as $casting) {

            $actor = $casting->getActor();
            echo "- $actor <br>";
        }
    }

}
?>