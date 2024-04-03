<?php
class Actor extends Person {

    private array $castings;

    public function __construct(string $name, string $firstname, string $gender, $bith_date ) {
        parent::__construct($name, $firstname, $gender, $bith_date);

        $this->castings = [];
    }


    public function addCasting(Casting $casting){

        $this->castings[] = $casting;
    }


    public function __toString(){
        return "{$this->firstname} {$this->name}";
    }


    public function filmo() {

        echo " $this a joué dans les films :<br>";
        foreach ($this->castings as $casting) {
            echo "- {$casting->getFilm()->getTitle()}<br>";
        }
    }

    // public function info(){
    //     echo 
    // }
}

?>