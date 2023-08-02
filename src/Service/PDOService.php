<?php

namespace App\Service;

use PDO;

class PDOService
{
    private PDO $PDO;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=pdo_exam';
    private string $user = "root";
    private string $password = '';

    public function __construct()
    {
        $this->pdo = new pdo($this->dsn, $this->user, $this->password);
    }

    public function getPDO(): pdo
    {
        return $this->pdo;
    }

    public function getDsn(): string
    {
        return $this->dsn;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
