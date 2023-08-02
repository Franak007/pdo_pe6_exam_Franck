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
    public function findAll(): array
    {
        $query = $this->pdoService->getPdo()->query("SELECT * FROM movie");
        return $query->fetchAll(\PDO::FETCH_ASSOC);

    }

    //array de Movie si en objet
    public function findByTitle(string $title): array
    {
        $query = $this->pdoService->getPDO()->prepare("SELECT * FROM movie WHERE title LIKE :title");
        $like = '%' . $title . '%';
        $query->bindParam(':title', $like);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    //Movie si en objet
    public function insertMovie(array $array)
    {
        $query = $this->pdoService->getPdo()->prepare(
            "INSERT INTO movie(title, release_date) VALUES(:title, :date)"
        );
        $query->bindParam(':title', $array['title']);
        $query->bindParam(':date', $array['releaseDate']);

        $query->execute();
    }
}
