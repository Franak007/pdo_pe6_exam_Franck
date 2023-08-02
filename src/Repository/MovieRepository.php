<?php

namespace App\Repository;

use App\Models;
use App\Service\PDOService;

class MovieRepository
{
    private PDOService $pdoService;

    public function __construct()
    {
        $this->pdoService = new PDOService();
    }


    //array de Movie si en objet
    public function findAll():array
    {
        $query = $this->pdoService->getPdo()->query("SELECT * FROM movie");
        return $query->fetchAll(\PDO::FETCH_ASSOC);

    }

    //array de Movie si en objet
    public function findByTitle(string $title):array
    {

    }

    //Movie si en objet
    public function insertMovie(Models\Movie|array $movie): Movie|array
    {

    }
}