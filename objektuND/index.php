<?php

// require __DIR__ .'/Pinigine.php';
require __DIR__ .'/vendor/autoload.php';

use Pin\Pinigine;
use Pin\Stikline;
use Pin\Grybas;
use Pin\Krepsys;
use Pin\Pinigine2;

$manoPinigine = new Pinigine;

$manoPinigine->ideti(50);
$manoPinigine->ideti(3);
$manoPinigine->ideti(20);
$manoPinigine->ideti(1);
$manoPinigine->ideti(2);



print_r($manoPinigine->skaiciuoti());


echo '<br>----------2-----------<br>';

$baltaStikline = new Stikline(200); 
$juodaStikline = new Stikline(150);
$bebroStikline = new Stikline(100);

$baltaStikline->ipilti(300);
$juodaStikline->ipilti($baltaStikline->ispilti());
$bebroStikline->ipilti($juodaStikline->ispilti());
echo $bebroStikline->getKiekis();

echo '<br>----------3-----------<br>';

// $grybauti = new Krepsys(500);
// $grybauti->eitiGrybauti();

$krepsys = new Krepsys();
while($krepsys->detiGryba(new Grybas, 500)){};
var_dump($krepsys);


echo '<br>----------4-----------<br>';

$kitaPinigine = new Pinigine2;


$kitaPinigine->ideti(20);
$kitaPinigine->ideti(1);
$kitaPinigine->ideti(15);
$kitaPinigine->ideti(1);
$kitaPinigine->ideti(2);
print_r($kitaPinigine);

echo '<br>';
echo $kitaPinigine->monetos();
echo '<br>';
echo $kitaPinigine->banknotai();