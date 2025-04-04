<?php
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP - Movie</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <main>
        <header class="text-center mb-2 py-2 bg-primary text-white">
            <h1>I nostri film!</h1>
        </header>
        <!-- lista films -->
        <div class="container d-flex justify-content-evenly my-4">

            <?php foreach($movies as $movie) { ?>
            <div class="card" style="width: 18rem;">
                <img src=<?php echo $movie -> img_url ?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-text text-center"> <?php echo $movie -> title ?></h6>
                    <p class="card-text">Durata: <?php echo $movie -> duration ?> min.</p>
                    <p class="card-text">Anno di uscita: <?php echo $movie -> year ?></p>
                    <p class="card-text">Generi: <?php
                        $genresArray = [];
                        foreach($movie -> genres as $genre) { $genresArray[] = $genre->genre;} echo implode(", ", $genresArray); ?>
                    </p>
                    <p class="card-text">Premi: <?php echo $movie -> award ?></p>
            </div>
            </div>

                <?php } ?>
        </div>
    </main>
</body>
</html>