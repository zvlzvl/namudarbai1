<?php
namespace Pin;


class Stikline {
    private $turis;
    private $kiekis = 0;


    public function __construct($turis){
    $this->turis = $turis;
    }

    public function getKiekis(){
       return $this->kiekis;
        }
   
    public function ipilti($kiekis){
        if(($kiekis + $this->kiekis) > $this->turis) {
            $this->kiekis = $this->turis;
        } else {
        $this->kiekis += $kiekis;
        }
    }

    public function ispilti(){
       return $this->kiekis;
    }

}