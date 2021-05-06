<?php

namespace Pin;

class Grybas {
    private $valgomas = null;
    private $sukirmijes = null;
    private $svoris = 0;

    public function __construct() {
        $this->valgomas = (bool) rand(0, 1);
        $this->sukirmijes = (bool) rand(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function __get($prop){
        
        return $this->$prop;
    }
  
}