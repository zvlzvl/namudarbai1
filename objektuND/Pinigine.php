<?php

namespace Pin;

class Pinigine {
    private $popieriniaiPinigai = [];
    private $metaliniaiPinigai = [];

public function __construct(){
    
    $this->popieriniaiPinigai;
    $this->metaliniaiPinigai;
}
public function ideti($kiekis){
    if ($kiekis <= 2) {
        array_push($this->metaliniaiPinigai, $kiekis);
    } else if($kiekis > 2){
        array_push($this->popieriniaiPinigai, $kiekis);
    }
}

public function skaiciuoti(){
    $sumaPop = 0;
    $sumaMet = 0;
    foreach ($this->popieriniaiPinigai as $key => $value) {
       $sumaPop += $value;
    }
    foreach ($this->metaliniaiPinigai as $key => $value) {
        $sumaMet += $value;
    }
    echo "Popierinių pinigų suma: $sumaPop, o metalinių suma: $sumaMet";
}

public function getMetaliniaiPinigai(){
    return $this->metaliniaiPinigai;
    }

public function getPopieriniaiPinigai(){
    return $this->popieriniaiPinigai;
    }
}