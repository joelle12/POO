<?php 

namespace Manager;

class ActorManager
{
    /**
     * Cette méthode permet de récupérer tous les films.
     */
    public function findAll()
    {
        return \Database::getInstance()->query('SELECT * FROM actor')->fetchAll(\PDO::FETCH_CLASS, \Entity\Actor::class);
    }
}