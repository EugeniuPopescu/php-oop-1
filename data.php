<?php

// Importo i modelli, cioè le definizioni delle classi di oggetto
require_once __DIR__ . "/Models/Movie.php";

// creo l'array in cui ogni elemento è un'istanza di
$movies = [
    new Movie(
        "Joker",
        "Inglese",
        "USA",
        2019,
        ["drammatico", "poliziesco", "thriller", "noir"]
    ),
    new Movie(
        "Alien Covenant",
        "Inglese",
        "USA",
        2017,
        ["drammatico", "poliziesco"]
    ),
    new Movie(
        "The Founder",
        "Inglese",
        "USA",
        2016,
        ["biografico", "drammatico"]
    )
];
