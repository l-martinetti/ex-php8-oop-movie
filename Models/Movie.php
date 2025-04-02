<?php

class Movie {

    // dichiaro le variabili d'istanza
    public $title; 
    public $year;
    public $duration;
    public $genre;

    // costruttore
    function __construct($_title, $_year, $_duration, Genre $_genre) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> duration = $_duration;
        $this -> genre = $_genre;
    }

    // metodo per sapere la durata
    public function getDuration() {
        return $this -> duration;
    }
}