<?php

namespace Zivile;

class Kibiras3{
    protected $akmenuKiekis = 0;

    public function prideti1Akmeni(){
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        echo $this->akmenuKiekis;
    }
}