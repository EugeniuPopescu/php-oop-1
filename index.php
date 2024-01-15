<?php
require __DIR__ . "/data.php";

// $joker = new Movie("Joker", "Inglese", "USA", 2019, "drammatico, poliziesco, thriller, noir");
// $alien = new Movie("Alien Covenant", "Inglese", "USA", 2017, "drammatico, poliziesco");
// $founder = new Movie("The Founder", "Inglese", "USA", 2016, "biografico, drammatico");



// echo "<h2>Stampo l'oggetto movie</h2>";
// var_dump($joker);

// echo "<h2>Chiamo il metodo della proprietà getMovie()</h2>";
// echo $joker->getMovie();


// echo "<h2>Stampo l'array di oggetti movie</h2>";
// echo var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Movies</h2>

        <?php
        foreach ($movies as $movie) {
        ?>
            <div>
                <h3> <?= $movie->title ?> </h3>
                <span>GENERE:</span>
                <?php
                echo implode(", ", $movie->gener)
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>