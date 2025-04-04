<?php

    trait Award {

        public $award;

        public function setAward($award) {
            $this->award = $award;
        }
        
        public function getAward(){
            return $this -> award;
        }
    }