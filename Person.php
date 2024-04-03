<?php

class Person{


    // definir public private protected 

    //  public : données accesible depuis n'importe où accessible depuis n'importe quelle classe.
    //  private : données non accessible en dehors de la classe.
    //  protected : données uniquement accesssible à la classe fille. 



 
    protected string $name;
    protected string $firstname;
    protected string $gender;
    protected \DateTime $birth_date;

    public function __construct(string $name, string $firstname, string $gender, string $birth_date){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->gender = $gender;
        $this->birth_date = new Datetime ($birth_date);
    }

    public function getName(){
        return $this->name;
    }
    
    public function getFirstname(){
        return $this->firstname;
    }
    
    public function getGender(){
        return $this->gender;
    }
    
    public function getBirth_date(){
        return $this->birth_date;
    } 

    //---------------setters-----------

    public function setName($name){
        $this->name = $name;
    }
    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function setBirth_date($birth_date){
        $this->birth_date = $birth_date;
    }

    public function __toString(){
        return "{$this->firstname} {$this->name}
        {$this->gender} {$this->birth_date}";
    }

    // public function info(){
    //     echo 
    // }
}
?>