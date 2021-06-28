<?php
spl_autoload_register(function($class){
    require('classes/'.$class.'.php');
});
// require('./classes/Character.php');
// require('./classes/Mage.php');
// require('./classes/Warrior.php');

$character = new Mage('Magicien');
$character2 = new Warrior('Guerrier');
$character3 = new Warrior('Monster');
$character1 = new Priest('Prêtre');
$character5 = new Priest('Prêtre2');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Figther-Game</title>
</head>
<body>
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

 
while($character1->isAlive() >0 && $character2->isAlive() > 0) : ?>

    <div class="divBattle">
        <div class="guer">
            <img src="./img/unnamed.jpg" alt="">
            <p class="warrior"><?= $character2->action($character1); ?></p>
        </div>
        <?php $status = "$character2->name à gagné !"; ?>
        
        <?php if($character1->isAlive() > 0) : ?>
            <div class="mag">
                <img src="./img/téléchargement.jpeg" alt="">
                <p class="mage"><?= $character1->action($character2); ?></p>
            </div>
                <?php $status = "$character1->name à gagné !";?>        
        <?php endif ?>
        
    </div>
<?php endwhile ?>
<div class ="divWin">
    <p><?= $status; ?><p>
</div>

 <?php var_dump($character1, $character2); ?>
</body>
</html>