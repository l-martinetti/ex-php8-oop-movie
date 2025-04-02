<?php

class Movie {

    // dichiaro le variabili d'istanza
    public $title; 
    public $year;
    public $duration;
    public $genres = [];

    // costruttore
    function __construct($_title, $_year, $_duration, array $_genres) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> duration = $_duration;
        $this -> genres = $_genres;
    }

    // metodo per sapere la durata
    public function getDuration() {
        return $this -> duration;
    }
}