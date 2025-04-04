<?php

class Movie {

    // uso il trait Award
    use Award;

    // dichiaro le variabili d'istanza
    public $title; 
    public $year;
    public $duration;
    public $genres = [];
    public $img_url;

    // costruttore
    function __construct($_title, $_year, $_duration, array $_genres, $_img_url) {
        
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> duration = $_duration;
        $this -> genres = $_genres;
        $this -> img_url = $_img_url;
    }

    // metodo per sapere la durata
    public function getDuration() {
        return $this -> duration;
    }
}