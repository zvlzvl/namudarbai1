<?php

namespace Zivile;
class MarsoPalydovas{
private $name;

static private $palydovai=[];


public static function duotiPalydova(){
    if (count(self::$palydovai) === 0){
        return self::$palydovai[0] = new self('Deimas');
    }
    if (count(self::$palydovai) === 1){
        return self::$palydovai[1] = new self('Fobas');
    }
        return self::$palydovai[rand(0, 1)];
    }




private function __construct($name){
    $this->name = $name;
}




}