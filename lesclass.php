<?php

//un fichier par class
require 'Personnage.php'
// on peut créer un nouveau personnage 
// deux façons de faire (la première à l'aide d'un constructor)
$merlin =new Personnage("Merlin");

$merlin->nom= "Merlin";
//on fait appel aux méthodes 
//lorsque l'ont veut accèder à une variable dans l'objet on met une flèche

$merlin->regenerer(5);
var_dump($merlin);

$harry->nom= "Harry";
$harry = new Personnage("Harry");
var_dump($harry); 

$harry->mort();

?>