<?php

class Database
{
    private static $pdo;

    public static function getInstance()
    {
        if (null === self::$pdo) { // On s'assure que la connexion à la BDD se fait une seule fois
            self::$pdo = new PDO('mysql:host=mysql.docker;dbname=movies;charset=utf8', 'root', 'root', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return self::$pdo;
    }
}

// Objet
$query1 = Database::getInstance();
$query2 = Database::getInstance();
$query3 = Database::getInstance();

var_dump($query1);
var_dump($query2);
var_dump($query3);
