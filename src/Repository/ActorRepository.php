<?php

namespace App\Repository;

use App\Models\Actor;
use App\Service\PDOService;

class ActorRepository
{
    private PDOService $pdoService;

    public function __construct()
    {
        $this->pdoService = new PDOService();
    }

    //array d'Actor si en objet
    public function findAll():array
    {
        $query = $this->pdoService->getPdo()->query("SELECT * FROM actor");
        return $query->fetchAll(\PDO::FETCH_ASSOC);

    }

    //Actor si en objet
    public function insertActor(array $array)
    {
        $query = $this->pdoService->getPdo()->prepare(
            "INSERT INTO actor(first_name, last_name) VALUES(:firstName, :lastName)"
        );
        $query->bindParam(':firstName', $array['firstName']);
        $query->bindParam(':lastName', $array['lastName']);

        $query->execute();
    }
}