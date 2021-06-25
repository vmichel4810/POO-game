# Figthers

## Principe

Mettre en place un combat entre deux personnages en utilisant de la POO.
Ce combat sera représenté uniquement par des lignes de textes.

## Exo

### Exo 1 : initialisation des personnages

Créer une classe ```Character```, dans lequel les personnages aurontles attribut suivant :

- nom :```name```
- un score d'attaque : ```attackPoints```(15)
- des points de vie : ```lifePoints```(100)
- (des point magie :````magicPoints```)

et une methode : 
- une action d'attaque :``attack()``


### Exo 2 : base du combat 
Dans l'index.php, mettre en place une logique pour que le combat se déroule jusqu'à ce quel'un des deux personnage soit KO.

### Exo 3 : les points de vie 
Faire en sorte que les points de vie ne passe pas en desous de 0.

### Exo 4 : les sous-classes de personnages

Ajouter un système de sous-classe, avec un ``Warrior`` et un ``Mage``.

> Important pour la suite : chaque sous-classe doit être indépendante et s'autogérer.
<!-- 
``Maje`` : 

-point de magie

``Warrior`` : 

- -->

### Exo 5 : améliorer le système d'appel des classes.
Trouver une solution plus performante pour inclure (ou require) les classes dont on a besoin ! 

### Exo 6 : caractéristique du mage
- Le Mage a des points de magie (magicPoints) : 100.
- Il a une attaque de 5.
- Son attaque : Boule de feu(fireball).
    - Utilise aléatoirement entre 1 et 20 points de magie. =>$magie = 7 (aléatoirement)
    <!-- nombre entier -->
    - Les dégats de cette attaque sont égaux au coût en points de magie * un nombre aléatoire entre 1 et 3. => $magie * $rand => 7 * 1.8 = 12.8 à arrondir 
- 3 possibilité d'attaque :
    - Il a assez de point de magie : boule de feu normale.
    - Il n'a plus assez de points de magie : boule de feu lancé avec les points de magie restant.
    - Si il n'a plus de point de magie : il donne un coup de bâton. 


### Exo 7 : bouclier magique du Mage
A partir de maintenant, a chaque tour, le mage aura deux option : 
- 70%  de chance de faire sa boule de feu.
- 30% de chance de faire son bouclier magique.

Caractéristique du bouclier magic :
- Absorbe la prochaine attaque dirirgé sur le mage.
- Une fois absorbé, le bouclier disparait.
- Tant que le bouclier est actif, le mage ne le relance pas
- Coût en magie du bouclier : 0.
> Important : chaque sous-classe doit être indépendante et s'autogérer.

