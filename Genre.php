<?php
class Genre {

    private string $name;
    private array $films;


    public function __construct(string $name){
        $this->name = $name;
        $this->films = [];
    }


    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    public function list() {

        echo "Liste des films de genre {$this->name} :<br>";

        foreach ($this->films as $film) {
            echo "- {$film->getTitle()}<br>";
        }
    }
}
?>