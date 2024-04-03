<?php
class Director extends Person {

    private array $films;

    public function __construct(string $name, string $firstname, string $gender, $bith_date){
        parent::__construct($name, $firstname, $gender, $bith_date);

        $this->films = [];
    }

    public function addFilm(Film $film) {
        $this->films[] = $film;
    }


    public function __toString(){
        return "{$this->firstname} {$this->name}";
    }

    public function filmo() {

        echo "$this a réalisé :<br>";
        foreach ($this->films as $film) {
            echo "- {$film->getTitle($this)}<br>";
        }
    }

    // public function info(){

    // }

}
?>