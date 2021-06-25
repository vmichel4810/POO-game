<?php

class Warrior extends Character
{

    public function action($target){

        $target->setLifePoints($this->attackPoints);
        
        $status = "$this->name attaque $target->name! Il reste $target->lifePoints points de vie à $target->name<br>";
        return $status;      
    }
}