<?php 

require_once 'Cat.php';

$bianca = new Cat();
$mina = new Cat();

// on peut affecter une valeur aux propriétés
$bianca->name = 'Bianca';
$bianca->type = 'Chat de gouttière';
$bianca->fur = 'blanc';

// on peut afficher la valeut d'une propriété
echo 'Mon chat s\'appelle ' . $bianca->name . ' et il fait ' . $bianca->cry();

$mina->name = 'Mina';

echo 'Mon autre chat s\'appelle ' . $mina->name . ' et il fait ' . $mina->cry() . ' aussi. <br>';


var_dump($bianca);
var_dump($mina);