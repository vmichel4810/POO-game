<?php

abstract class Character 
{
    public $name;
    protected $lifePoints = 100;
    public $attackPoints = 15;


    Public function __construct($name){
       $this->name = $name;
    }
    // public function attack($target){

    //     $target->setLifePoints($this->attackPoints);
    //     // $status ="$this->name est vainqueur <br> $target->name est KO";
    //     $status = "$this->name attaque $target->name! Il reste $target->lifePoints points de vie à $target->name<br>";
    //     return $status;      
    //     }
    
    
    // Getter : récupérer un attribut
    public function getLifePoints(){
        return $this->lifePoints;
    }
    
    // Setter : modifier un attribut
    
    public function setLifePoints($damage){
        
        $this->lifePoints -= round($damage);
     
        if($this->lifePoints <=0){
            $this->lifePoints = 0;
        }
        return;        
    }

    public function isAlive(){
        if($this->lifePoints > 0){
            return true;
        }else{
            return false;
        }
    }
}