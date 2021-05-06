<?php

namespace Pin;


// class Krepsys {
// public $talpa;
// public $ideta = 0;

// public function __construct($talpa) {
//     $this->talpa=$talpa;
// }
// public function eitiGrybauti() {
//     $i=0;
//     do { 
        
//         $gryb = new Grybas();
//         print_r($gryb);
//         echo'<br>';
//         $i++;

//     if($gryb->valgomas == true && $gryb->sukirmijes == false){
//             $this->ideta += $gryb->svoris;
//             echo '<h2 style="color: green;">'.$this->ideta.'</h2>';
//         }
//     } while ($this->ideta <= $this->talpa);

// }
// }


class Krepsys {
    private $kiekis = 0;
    
 
    public function detiGryba(Grybas $grybas, $reikia) {
    
        if($grybas->valgomas && !$grybas->sukirmijes){
                $this->kiekis += $grybas->svoris;
            }
            return $reikia > $this->kiekis;
        }
    }




   