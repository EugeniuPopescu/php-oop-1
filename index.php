<?php
require __DIR__ . "/Models/Movie.php";

$joker = new Movie("Joker", "Inglese", "USA", 2019, "drammatico, poliziesco, thriller, noir");
$alien = new Movie("Alien Covenant", "Inglese", "USA", 2017, "drammatico, poliziesco");
$founder = new Movie("The Founder", "Inglese", "USA", 2016, "biografico, drammatico");

// creo l'array di oggetti
$movies = array($joker, $alien, $founder);

echo "<h2>Stampo l'oggetto movie</h2>";
var_dump($joker);

echo "<h2>Chiamo il metodo della proprietà getMovie()</h2>";
echo $joker->getMovie();


echo "<h2>Stampo l'array di oggetti movie</h2>";
echo var_dump($movies);
