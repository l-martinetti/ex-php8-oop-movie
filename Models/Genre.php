<?php

    class Genre {

        public $genre;

        function __construct($_genre){

            $this -> genre = $_genre;
        }

        public function getGenre() {
            return $this -> genre;
        }
    }