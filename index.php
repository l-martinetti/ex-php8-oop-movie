<?php
require_once './Models/Movie.php';
require_once './Models/Genre.php';

// dichiarazione generi interessanti
$romantico = new Genre("Romantico");
$guerra = new Genre("Guerra");
$fantascienza = new Genre("Fantascienza");
$azione = new Genre("Guerra");

// creazione due istanze di classe Movie
$via_col_vento = new Movie("Via col vento", 1939, 136, [$romantico, $guerra]);
$blade_runner = new Movie("Bladerunner", 1982, 238, [$fantascienza, $azione]);

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
    <pre>
    <?php
        var_dump($via_col_vento);
        var_dump($blade_runner);
    ?>
    </pre>
</body>
</html>