<?php

// include './classes/Voiture.php';

// $voiture = new Voiture('rouge', 100, 4);
// $voiture2 = new Voiture('jaune', 140,4);

// $voiture->avance();
// $voiture->avance();
// $voiture->avance();

// $voiture->prendreEssence($voiture2, 30);

// $voiture->avance();

// var_dump($voiture, $voiture2);
spl_autoload_register(function($class){
    require('classes/'.$class.'.php');
});
// require('./classes/Character.php');
// require('./classes/Mage.php');
// require('./classes/Warrior.php');

$character1 = new Mage('Magicien');
$character2 = new Warrior('Guerrier');

while($character1->isAlive() >0 && $character2->isAlive() > 0){
    // if($character1->shield == true){
    //     echo "$character1->name est protéger tu pourra l'attaquer au prochain tour <br>";
    //     $character1->shield = false;
    // }else{

        echo $character2->attack($character1);
        $status = "$character2->name à gagné !";
        echo "<br>";
    // }
    if($character1->isAlive() > 0){
        echo $character1->attack($character2);
        $status = "$character1->name à gagné !";
        echo "<br>";        
    }
    echo "<br>";
}

echo $status;

var_dump($character1, $character2);
