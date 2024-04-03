<?php
class Film{

    private string $title;

    private int $duration;

    private string $synopsys;

    private DateTime $release_date;

    private Director $director;

    private array $genres;
    
    private array $castings;

    //---------------------------Construct-----------------------

    public function __construct(string $title, int $duration, string $synopsys, string $release_date, Director $director, array $genres){

        $this->title = $title;
        $this->duration = $duration;
        $this->synopsys = $synopsys;
        $this->release_date = new DateTime($release_date);
        $this->director = $director;
        $this->genres = $genres;

        $this->castings = [];

        $this->director->addFilm($this);

        foreach ($this->genres as $genre) {
            $genre->addFilm($this);
        }
    }


    //-------------getters-----------

    public function getTitle(){
        return $this->title;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getSynopsys(){
        return $this->synopsys;
    }

    public function getRelease_date(){
        return $this->release_date;
    }

    public function getDirector(){
        return $this->director;
    }

    //-------------setters-----------

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDuration($duration){
        $this->duration = $duration;
    }

    public function setSynopsys($synopsys){
        $this->synopsys = $synopsys;
    }

    public function setRelease_date($release_date){
        $this->release_date = $release_date;
    }

    public function setDirector($director){
        $this->director = $director;
    }

//-------------------------------Methode------------------------------


    public function addCasting(Casting $casting) {

        $this->castings[] = $casting;
    }
    
    
    public function casting(){

        echo "Casting du film : {$this->title} <br>";

        foreach ($this->castings as $casting) {

            echo "Acteur : {$casting->getActor($this)} | Rôle : {$casting->getRole($this)}<br>";
        }

    }

    public function __toString(){

        return "{$this->title}";
    }
    
    public function info(){

        echo "Titre : $this <br>

        Durée :{$this->duration} minutes<br>

        Résumé :{$this->synopsys}<br>

        Date de sortie : {$this->release_date->format('d-m-Y')} <br>

        Réalisateur : {$this->getDirector($this)}<br>

        Genre(s) : ";

        $genreList = [];

        foreach ($this->genres as $genre) {

            $genreList[] = $genre->name;
        }
        echo implode(", ", $genreList) . "<br>";

        echo "Casting :<br>";

            foreach ($this->castings as $casting) {

            echo "- {$casting->getActor($this)} : {$casting->getRole($this)}<br>";
        }
    }
}
?>