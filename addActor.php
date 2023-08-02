<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\ActorRepository;

$actorRepository = new ActorRepository();

if (isset($_POST['first-name']) && isset($_POST['last-name'])) {
    $firstname = $_POST['first-name'];
    $lastName = $_POST['last-name'];

    $actorRepository->insertActor([
        'firstName' => $firstname,
        'lastName' => $lastName
    ]);

}

header('location: index.php');
exit();