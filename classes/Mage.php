<?php

class Mage extends Character
{
    
    
    // public function attack($target)
    // {
        //     if($this->magicPoints <=0){
            //         return $this->attackMage($target);    
            //     }else
            //     {
                //         return $this->fireballAttack($target);
                //     }
                // }
                
                // public function attackMage($target)
                // {
                    //     $target->setLifePoints($this->mageAttackPoints1);
                    //     $status = "batton";
                    //     return;
                    // }
                    
                    // public function setMagicPoints($magicPointforAttack)
                    // {
                        //     $this->magicPoints -= $magicPointforAttack ;
                        
                        //     return;
                        // }
                        
                        
                        // public function fireballAttack($target)
                        // {   
                            //     $rand = rand(1, 20);
                            //     if($this->magicPoints>$rand){
                                //         $attck = $rand*round(rand(10,30)/10);
                                //         $this->setMagicPoints($rand);
                                //         $target->setLifePoints($attck);
                                //         $status = "superattaque Le $this->name attaque le $target->name avec $attck  il reste $target->lifePoints points de vie au $target->name <br>";
                                //         // $attck = $rand;
                                //         // $this->setMagicPoints($rand);
                                //         // $target->setLifePoints($attck);
                                //         // $status = "smallattaque Le $this->name attaque le $target->name avec $attck  il reste $target->lifePoints points de vie au $target->name <br>";
                                //     }elseif($this->magicPoints < $rand && $this->magicPoints > 0)
                                //     {
                                    //         $attck = $rand*round(rand(10,30)/10);
                                    //         $this->setMagicPoints($rand);
                                    //         $target->setLifePoints($attck);
                                    //         $status = "smallattaque Le $this->name attaque le $target->name avec $attck  il reste $target->lifePoints points de vie au $target->name <br>";
                                    //     } elseif($this->magicPoints ==0){
                                        //         return "baton";
                                        //     }
                                        
                                        //     // $status = "Le $this->name attaque le $target->name avec $attck  il reste $target->lifePoints points de vie au $target->name <br>";
                                        //     return $status;
                                        // }
    public $magicPoints = 50;
    public $attackPoints = 5;
    public $shield = false;
    
    
    public function fireballA($target)
    {
        if($this->magicPoints == 0){
            $status ="$this->name attaque le $target->name avec son Baton, il reste $target->lifePoints points de vie au $target->name, et $this->magicPoints point de magie à $this->name <br>";
            // return $status;
            $damage= $this->attackPoints;
            $target->setLifePoints($damage);
            
        }else {
            $cost = rand(1, 20);
            if ($this->magicPoints < $cost){
                $cost= $this->magicPoints;
            }
            $rand = rand(10, 30)/10;
            $damage = round($cost * $rand);
            $this->magicPoints -= $cost;
            $target->setLifePoints($damage);
            $status =" $this->name attaque le $target->name   il reste $target->lifePoints points de vie au $target->name, et $this->magicPoints points de magie à $this->name <br>";
        }
        return $status;   
    }

    public function attack($target){
        $percent = rand(0, 100);
        if($percent<=70){
            $stat =  $this->fireballA($target);
        }elseif($percent>70){
            $stat = $this->shield($target); 
        }
        return $stat;            
    }

    public function shield($target){
        if($this->shield == false){
            $this->shield = true;
            $status = "$this->name active son bouclier";
        }elseif($this->shield == true){
            echo "$this->name est protéger tu pourra l'attaquer au prochain tour <br>";
            $this->shield = false;
            $status = $this->fireballA($target);
            echo"le Bouclier etait activer donc j'ai attaqué <br>";
        }
        return $status; 
    }
    public function setShieldProtection(){
    }
    
    public function setProtection(){
        if($this->shield == true){
            $this->lifePoints += 0;
            return;
        }else{
            $this->shield = false;
            return;
        }
        // else{
        //     $this->setLifePoints($damage);
        //     return;
        // }
        
    }
}


