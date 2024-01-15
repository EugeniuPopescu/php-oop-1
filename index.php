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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Movies</h1>
        </div>

        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3> <?= $movie->title ?> </h3>
                            <p>Lingua: <?= $movie->language ?></p>
                            <p>Paese: <?= $movie->nation ?></p>
                            <p>Anno: <?= $movie->year ?></p>

                            <span>GENERE: </span>
                            <?php echo implode(", ", $movie->gener) // implode -> prende un array e lo formatta come stringa 
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>