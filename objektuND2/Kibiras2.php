<?php

namespace Zivile;

class Kibiras2{
    public static $akmenuKiekisVisuoseKibiruose;
    protected $akmenuKiekis = 0;

public function __construct(){
    self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
}

    public function prideti1Akmeni(){
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
    }

    public function kiekPririnktaAkmenu(){
        echo $this->akmenuKiekis;
    }

    static function getAkmenuKiekisVisuoseKibiruose(){
      echo self::$akmenuKiekisVisuoseKibiruose;
    }
}

