<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\MovieRepository;

$movieRepository = new \App\Repository\MovieRepository();

if (isset($_POST['title-search'])) {
$sentence = $_POST['title-search'];

$movies = $movieRepository->findByTitle($sentence);
?>

<h1>Film(s) contenant " <?= $sentence ?> " : </h1>

<ul>
    <?php
    if (count($movies) > 0 ) {
        foreach ($movies as $movie) : ?>
            <li><?= $movie['title']?></li>

        <?php endforeach;
    } else {
        echo "Il n'y a pas de film correspondant à votre recherche";
    }
    }
    ?>
</ul>

<a href="index.php">Retour à l'accueil</a>