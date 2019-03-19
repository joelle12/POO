<?php

require_once __DIR__ . '/../config/autoload.php';

$uri = $_SERVER['PATH_INFO'] ?? '/';

// On teste si on est sur la page d'accueil
if ($uri === '/') {
    require_once __DIR__ . '/../views/home.php';
}else if ($uri === '/acteurs') {
    require_once __DIR__ . '/../views/actors.php';
}

/**
* Ajouter la partie Acteur :
*
* Etape 1 : Si la route est "/acteurs" on inclue un fichier "acteurs.php dans "views/"
* Etape 2 : 
*          
* Etape 3 : 
* Etape 4 : Créer la classe ActorManager avec une méthode findAll() qui renvoie un tableau d'instance de Actor.
*/