<?php
namespace Pin;


class Stikline {
    private $turis = 0;
    private $kiekis = 0;


    public function __construct($turis){
    $this->turis = $turis;
    $this->kiekis;
    }
    public function getTuris(){
        return $this->turis;
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