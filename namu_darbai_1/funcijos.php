<?php
for ($i=1; $i < 10; $i++) { 
    if(($i %2)== 0){
        continue;
    }
    echo $i;
}

echo '------------------1-----------------<br>';

function text($txt)
{
    return "<h1 style =\"display:inline;\">$txt</h1>";
}
echo text('Labas rytas');

echo '<br>------------------2-----------------<br>';

function text_tag($txt, $tag)
{
    $htag = 'h' . $tag;
    return "<$htag>$txt</$htag>";
}
echo text_tag('Laba diena!', 6);

echo '------------------3-----------------<br>';

$laikas = md5(time());  // match yra arejus
echo $laikas;
echo '<br>';

$laikas = preg_replace_callback('/\d+/', function ($match) {
    return text($match[0]);
}, $laikas);

echo $laikas;


echo '<br>------------------4-----------------<br>';

function be_liekanu($arg)
{
    if ($arg === intval($arg)) {
        $count = 0;
        for ($i = 2; $i < $arg; $i++) {
            if ($arg % $i === 0) {
                $count++;
            }
        }
        return $count;
    } else {
        return 'false number';
    }
}
echo '<pre>';
echo be_liekanu(4);

echo '<br>------------------5-----------------<br>';

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(33, 77);
};

print_r($arr);

usort($arr, function ($a, $b) {
    return be_liekanu($b) <=> be_liekanu($a);
});

print_r($arr);

foreach ($arr as $key => $value) {
    print_r(be_liekanu($value) . '<br>');
}


echo '<br>------------------6-----------------<br>';
$arr2 = [];
for ($i = 0; $i < 20; $i++) {
    $arr2[$i] = rand(333, 777);
};

print_r($arr2);

foreach ($arr2 as $key => $value) {
    if (be_liekanu($value) === 0) {
        unset($arr2[$key]);
    }
}

print_r($arr2);

echo '<br>------------------7-----------------<br>';

// $masyvas = [];
// $depth = rand(10, 30);
// $masyvas = rek($masyvas, $depth);

// function rek($arr, $depth)
// {
//     $times = rand(10, 20);
//     for ($i = 0; $i < $times - 1; $i++) {
//         $arr[] = rand(0, 10);
//     }
//     if ($depth > 0) {
//         $arr[] = rek([], $depth - 1);
//     } else {
//         $arr[] = 0;
//     }
//     return $arr;
// }

// print_r($masyvas);

echo '------kitas be rekursijos----------<br>';

function randomArr()
{
    $howLong = rand(10, 20);
    $array = range(1, $howLong);
    foreach ($array as &$value) {
        $value = rand(0, 10);
    }
    return $array;
}

$howDeep = rand(10, 30) - 1;

$bigArray = randomArr();
$bigArray[count($bigArray) - 1] = 0;

foreach (range(1, $howDeep) as $_) {
    $nextArray = randomArr();
    $nextArray[count($nextArray) - 1] = $bigArray;
    $bigArray = $nextArray;
}

print_r($bigArray);

echo '<br>------------------8-----------------<br>';

function count1($arg)
{
    $sum = 0;
    foreach ($arg as $key => $value) {
        if (!is_array($value)) {
            $sum += $value;
        } else {
            $sum += count1($value);
        }
    }
    return $sum;
}
print_r(count1($bigArray));


echo '<br>------------------9-----------------<br>';


function add($arg)
{
    $ar = [];
    for ($i = 0; $i < $arg; $i++) {
        $ar[] = rand(1, 33);
    }
    for ($j = sizeof($ar) - 3; $j <= sizeof($ar) - 1; $j++) {
        if (be_liekanu($ar[$j]) === 0) {
            $ar = add($arg + 1);
        }
    }
    return $ar;
}

print_r(add(3));

    

echo '<br>------------------10-----------------<br>';
$arr10 = [];
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $arr10[$i][$j] = rand(1, 100);
    }
}
print_r($arr10);


function get_average($arg)
{
    $sum = 0;
    $count = 0;
    $av = 0;
    foreach ($arg as $key => $value) {
        foreach ($value as $k => $v) {
            if (be_liekanu($v) === 0) {
                $sum += $v;
                $count++;
            }
        }
    }
    $av = $sum / $count;
    return $av;
}

// echo '----avg---';
// print_r(get_average($arr10));


function more_70($arg){
    $av = get_average($arg);
     if ($av >= 70){
         return $arg;
     } else {
        $smalest = 100;
        $k1 = null;
        $k2 = null;
        foreach ($arg as $key => $value) {
            foreach ($value as $k => $v) {
            if ($v < $smalest) {
                $smalest = $v;
                    $k1 = $key;
                    $k2 = $k;
            }
        }
    }
    $arg[$k1][$k2] +=3;
    return more_70($arg);
}
}

 print_r(more_70($arr10));