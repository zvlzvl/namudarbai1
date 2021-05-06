<?php

namespace Pin;

class Pinigine2 {
    private $popieriniaiPinigai = [];
    private $metaliniaiPinigai = [];

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
public function monetos(){
    $kiekis = 0;
    foreach ($this->metaliniaiPinigai as $value) {
       $kiekis ++;
    }
    return $kiekis. 'monetų.';
}
public function banknotai(){
    $kiekis = 0;
    foreach ($this->popieriniaiPinigai as $value) {
       $kiekis ++;
    }
    return $kiekis.' banknotų.';
}

}