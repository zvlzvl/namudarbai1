<?php

namespace Pin;

class Grybas {
    private $valgomas = null;
    private $sukirmijes = null;
    private $svoris = 0;

    public function __construct() {
        $this->valgomas = (random_int(0, 1) === 1 ? 'true' : 'false');
        $this->sukirmijes = (random_int(0, 1) === 1 ? 'true' : 'false');
        $this->svoris = rand(5, 45);
    }
    public function getValgomas(){
        return $this->valgomas;
        }    
    public function getSukirmijes(){
        return $this->sukirmijes;
        }

    public function getSvoris(){
        return $this->svoris;
        }    

}