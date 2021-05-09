<?php

namespace Zivile;

class Zveris extends Miskas{
    protected $name;
    
public function __construct($name){
    $this->name = $name;
    }

public function papasakok(){
    echo "Aš esu žvėris vardu $this->name.";
    parent::papasakok();
    }



}
    