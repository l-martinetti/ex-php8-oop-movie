<?php

require_once './Traits/Award.php';

require_once './Models/Movie.php';
require_once './Models/Genre.php';

// dichiarazione generi interessanti
$romantico = new Genre("Romantico");
$guerra = new Genre("Guerra");
$fantascienza = new Genre("Fantascienza");
$azione = new Genre("Azione");

// creazione due istanze di classe Movie
$via_col_vento = new Movie("Via col vento", 1939, 136, [$romantico, $guerra], "./imgs/via_col_vento.jpg");
$blade_runner = new Movie("Bladerunner", 1982, 238, [$fantascienza, $azione], "./imgs/bladerunner.jpg");

// assegnazione di una stringa al trait 'Award' 
$via_col_vento -> setAward('Oscar');
$blade_runner -> setAward('Oscar');

$movies = [$via_col_vento, $blade_runner];