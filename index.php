<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';

use app\Controllers\BookController;
use app\Controllers\MemberController;
use app\CustomErrors\NotImplementedException;
use app\Models\BookModel;
// use app\Models\MemberModel
use app\Entity\Book;
use app\Entity\Member;
use app\Factories\BookFactory;
use app\Factories\MemberFactory;
use app\Views\BookView;
// use app\Views\MemberView;


echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma page d\'accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Ajoutez votre style CSS ici, par exemple : */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #f0f0f0;
            padding: 1rem;
            text-align: center;
        }
        main {
            padding: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Wesh</h1>
    </header>
    <main>
';

$bookController = new BookController();
$table = [];
$table[1] = $bookController->getFactory()->createBook(1, "La route de l'aventure", "Un récit palpitant sur la découverte d'un nouveau monde.", "Alexandre Martin", new DateTime("2022-03-15"), "Éditions du Voyage");
$table[2] = $bookController->getFactory()->createBook(2, "Les secrets de la mer", "Une plongée dans l'univers sous-marin à la recherche de trésors oubliés.", "Marine Dubois", new DateTime("2022-06-01"), "Océan Éditions");
$table[3] = $bookController->getFactory()->createBook(3, "Au cœur de la forêt", "Histoire d'un jeune explorateur confronté aux mystères de la nature sauvage.", "Jules Forestier", new DateTime("2023-01-02"), "Nature & Découvertes");
$table[4] = $bookController->getFactory()->createBook(4, "Le château de minuit", "Intrigues et secrets dans une forteresse millénaire.", "Sophie Durand", new DateTime("2021-10-10"), "Mystère Éditions");
$table[5] = $bookController->getFactory()->createBook(5, "Recettes du monde", "Une sélection de plats savoureux inspirés de différentes cultures.", "Pierre Gourmet", new DateTime("2022-11-20"), "Cuisine & Traditions");
$table[6] = $bookController->getFactory()->createBook(6, "Voyage vers l'inconnu", "Récit d'un périple intercontinental à la rencontre de peuples oubliés.", "Emma Lecoq", new DateTime("2023-02-15"), "Globe-Trotteurs");
$table[7] = $bookController->getFactory()->createBook(7,    "Le grand orchestre",    "Une plongée dans le monde de la musique classique et de ses compositeurs.",    "Arthur Mélodie",    new DateTime("2022-08-05"),    "Harmonie Éditions");
$table[8] = $bookController->getFactory()->createBook(8,    "Histoires de science",    "De la découverte de l'ADN à l'exploration spatiale.",    "Claire Lavoisier",    new DateTime("2023-03-01"),    "Savoir & Recherche");
$table[9] = $bookController->getFactory()->createBook(9,    "Le bal des illusions",    "Drames et passions lors d'un grand bal dans la haute société.",    "Camille Dumas",    new DateTime("2021-12-25"),    "Romanesque Press");
$table[10] = $bookController->getFactory()->createBook(10,    "L'art de la méditation",    "Techniques et bienfaits pour un esprit apaisé.",    "François Zen",    new DateTime("2022-09-18"),    "Bien-être & Harmonie");

$memberController = new memberController();

$member = $memberController->getMemberFactory()->newMember(1, "Daaaaave", "Dave.davemail@davesmtp.dave", "d@v3#");
echo $member."</br></br>" ;

foreach ($table as $row) {
    echo $row . "</br>";
}
echo
'
    </main>
    <footer>
        <p>&copy; ' . date("Y") . ' Mon Site Web</p>
    </footer>
</body>
</html>';
