<?php
// pour créer une class on met les accolades
// on va ajouter des propriétés (caractéristiques qui définissent notre objet)
class Personnage{
    //on veut connaitre ces vies
    public $vie = 80;
    // public visibilité de la variable
    public $atk = 20;
    //visiblité public(accessible dans la class et en dehors(fichier externe))
    public $nom;

    //constructor(avec la variable)
    public function __construct($nom){
        this->nom = $nom;
    }
    //on va créer une méthode pour que le personnage crie
    public function crier(){
        echo 'LEERU JENK'
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie = $this->vie + $vie;
        }
        //this fait référence à l'instance en cours (Harry et Merlin)
        //cette fonction prend la vie du personnage et la remonte
    }

    // fonction pour savoir si notre personne est mort
    // elle retourne le this vie (si c'est <= 0 alors il est mort)
    public function mort(){
        return $this->vie <= 0;
    }
}