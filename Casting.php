<?php
class Casting {

    private Film $film;
    private Actor $actor;
    private Role $role;


    public function __construct(Film $film, Actor $actor, Role $role){

        $this->film = $film;
        $this->actor = $actor;
        $this->role = $role;

        $this->film->addCasting($this);
        $this->actor->addCasting($this);
        $this->role->addCasting($this);
    }

    //---------Getters------------

    public function getFilm(){
        return $this->film;
    }

    public function getActor(){
        return $this->actor;
    }

    public function getRole(){
        return $this->role;
    }

    //---------Setters------------
    
    // public function setFilm($film){
    //     $this->film = $film;
    // }

    // public function setActor($actor){
    //     $this->actor = $actor;
    // }

    // public function setRole($role){
    //     $this->role = $role;
    // }
}
?>