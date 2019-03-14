<?php

/**
 * Une voiture posséde 4 roues, une couleur, une marque et un modèle. (4 attributs)
 * Une voiture peut rouler et klaxonner. (2 méthodes)
 */

$car = new Car('Renault', 'Clio');
$car->setColor('rouge');

echo $car->drive(); // Affiche "La Renault Clio roule sur ses 4 roues."
echo $car->klaxon(); // Affiche "La voiture rouge klaxonne."
