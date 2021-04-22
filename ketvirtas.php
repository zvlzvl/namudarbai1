<?php
echo '<pre>';

echo '<br>----------1----------<br>';
$arr = [];
for ($i = 0; $i < 30; $i++) {
    $arr[$i] = rand(5, 25);
}
print_r($arr);

echo '<br>----------2a----------<br>';
$count = 0;
foreach ($arr as $val) {
    if ($val > 10) {
        $count += 1;
    }
}
echo "Masyve didesnių reikšmių už 10 viso yra: $count";

echo '<br>----------2b----------<br>';

$largest = 5;
foreach ($arr as $val) {
    if ($val > $largest) {
        $largest = $val;
    }
}
echo "Didžiausia masyvo reikšmė yra: $largest";

echo '<br>----------2c----------<br>';
$sum = 0;
foreach ($arr as $val) {
    $sum += $val;
}
echo "Visų masyvo reikšmių suma yra: $sum";

echo '<br>----------2d----------<br>';

$arr2 = [];
foreach ($arr as $key => $val) {
    $arr2[] = $val - $key;
}
echo 'Masyvo reikšmė minus masyvo indeksas: ';
print_r($arr2);

echo '<br>----------2e----------<br>';

for ($i = 30; $i < 40; $i++) {
    $arr2[$i] = rand(5, 25);
}
echo 'Masyvas papildytas dešimčia elementų: ';
print_r($arr2);

echo '<br>----------2f----------<br>';

$arr_odd = [];
$arr_even = [];

foreach ($arr2 as $key => $val) {
    if ($key % 2 === 0) {
        $arr_even[] += $val;
    } else {
        $arr_odd[] += $val;
    }
}
echo 'Nelyginių reikšmių masyvas: ';
print_r($arr_odd);
echo 'Lyginių reikšmių masyvas: ';
print_r($arr_even);

echo '<br>----------2g----------<br>';

foreach ($arr2 as $key => &$val) {
    if ($key % 2 === 0 && $val > 15) {
        $val = 0;
        //$arr2[$key] = 0;
    }
}
echo 'Lyginio masyvo reikšmės didesnės už 15 prilyginamos 0: <br>';
print_r($arr2);

echo '<br>----------2h----------<br>';

foreach ($arr2 as $key => $val) {
    if ($val > 10) {
        echo "Mažiausias indeksas, kurio reikšmė didesnė už 10 yra: $key";
        break;
    }
}
echo '<br>----------2i----------<br>';

foreach ($arr2 as $key => $val) {
    if ($key % 2 === 0) {
        unset($arr2[$key]);
    }
}
echo 'Pašalinti elementai, turintys porinį indeksą: ';
print_r($arr2);

echo '<br>----------3----------<br>';

$arr_letters = [];
for ($i = 0; $i < 200; $i++) {
    $arr_letters[] = chr(rand(65, 68)); //ASCII http://www.asciitable.com/
}
echo 'Atsitiktinis raidžių masyvas: ';
print_r($arr_letters);

echo 'Reikšmių kiekiai: ';
print_r(array_count_values($arr_letters));

echo '<br>----------4----------<br>';

echo 'isrusiuotas raidžių masyvas pagal abėcėlę: ';
sort($arr_letters);
print_r($arr_letters);

echo '<br>----------5----------<br>';

$arr_l1 = [];
$arr_l2 = [];
$arr_l3 = [];

for ($i = 0; $i < 200; $i++) {
    $arr_l1[] = chr(rand(65, 68));
    $arr_l2[] = chr(rand(65, 68));
    $arr_l3[] = chr(rand(65, 68));
}

$arr_all = array_merge($arr_l1, $arr_l2, $arr_l3);

echo 'Trijų masyvų unikalių reikšmių kiekis: ';
print_r(array_count_values($arr_all));

echo '<br>----------6----------<br>';

$arr_number1 = [];
$arr_number2 = [];

do {
    $rand_number = rand(100, 999);
    if (!in_array($rand_number, $arr_number1)) {
        array_push($arr_number1, $rand_number);
    }
} while (sizeof($arr_number1) <= 100);

do {
    $rand_number2 = rand(100, 999);
    if (!in_array($rand_number2, $arr_number2)) {
        array_push($arr_number2, $rand_number2);
    }
} while (sizeof($arr_number2) <= 100);

echo 'Unikalių skaičių masyvas nr1: ';
print_r($arr_number1);
echo 'Unikalių skaičių masyvas nr2: ';
print_r($arr_number2);

echo '<br>----------7----------<br>';

$new_arr_number = [];

foreach ($arr_number1 as $val) {
    if (!in_array($val, $arr_number2)) {
        array_push($new_arr_number, $val);
    }
}
echo 'Elementai esantys pirmame, bet nėra jų antrame masyve: ';
print_r($new_arr_number);

// print_r(array_diff($arr_number1, $arr_number2));

echo '<br>----------8----------<br>';

$new_arr_inboth = [];

foreach ($arr_number1 as $val) {
    if (in_array($val, $arr_number2)) {
        array_push($new_arr_inboth, $val);
    }
}
echo 'Masyvas iš elementų, kurie kartojasi abiejuose masyvuose: ';
print_r($new_arr_inboth);

echo '<br>----------9----------<br>';

$arr_combine = [];
for ($i = 0; $i < 101; $i++) {
    $arr_combine[$arr_number1[$i]] = $arr_number2[$i];
}
echo 'Indeksai pirmo masyvo reikšmės. o reikšmės antro masyvo reikšmės: ';
print_r($arr_combine);

// $masyvas9uzd = array_combine($masyvas1,$masyvas2);
echo '<br>----------10----------<br>';

$rand1 = rand(5, 25);
$rand2 = rand(5, 25);
$sum = 0;
$fib = [$rand1]; // nuliniam priskiriame pirma reiksme ir cikla pradedame nuo pirmo
for ($i = 1; $i < 11; $i++) {
    $fib[$i] = $rand2;
    $sum = $rand1 + $rand2;
    $rand1 = $rand2;
    $rand2 = $sum;
}
echo 'Fibionaciu masyva: ';
print_r($fib);


 
// $color = ['blue', 'red', 'green', 'yellow', 'green', 'blue'];
// foreach($color as &$val) {}
// foreach($color as $val) {
//     echo "<br>$val";
// }