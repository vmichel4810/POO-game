<?php

class Priest extends Character
{   
    public function attack($target){

        $target->setLifePoints($this->attackPoints);
        
        $status = "$this->name attaque $target->name! Il reste $target->lifePoints points de vie à $target->name<br>";
        return $status;      
    }

    public function care(){
        $this->lifePoints += 25;
        if($this->lifePoints > 100){
            $this->lifePoints = 100;
        }
        $status = "$this->name se soigne et gagne 25 points de vie et son solde de points est de $this->lifePoints";
        return $status;
    }

    public function recovery(){
        if($this->lifePoints < 100){
            $this->lifePoints = 100;
            $status = "$this->name se régénere et son solde de points est de $this->lifePoints";
        }
        return $status;

    }

    public function action($target){
        $choice = rand(1, 100);
        if($choice <=70){
            $status = $this->attack($target);
        }elseif($choice>70 && $choice<=85){
            $status = $this->care();
        }else{
            $status = $this->recovery();
            if($this->lifePoints == 100){
                $this->attack($target);
                $status = "j'ai attaque parce que je suis a 100%";
                return ;
            }
        }
        return $status;

    }
}