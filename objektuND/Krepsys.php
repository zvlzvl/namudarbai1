<?php

namespace Pin;


class Krepsys {
public $talpa = 500;
public $ideta = 0;

public function __construct() {
    $this->talpa;
}
public function eitiGrybauti() {
    $i=0;
    do { 
        
        $gryb = new Grybas();
        print_r($gryb);
        echo'<br>';
        $i++;

    if($gryb->getValgomas() == 'true' && $gryb->getSukirmijes() == 'false'){
            $this->ideta += $gryb->getSvoris();
            echo '<h2 style="color: green;">'.$this->ideta.'</h2>';
        }
    } while ($this->ideta <= $this->talpa);

}
}




   