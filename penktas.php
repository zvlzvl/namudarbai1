<?php
// echo '<pre>';

echo '<br>----------1----------<br>';

$arr = [];
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        $arr[$i][$j] = rand(5, 25);
    }
}
print_r($arr);


echo '<br>----------2a----------<br>';
$count = 0;
foreach ($arr as $key => $value) {
    foreach ($value as $k => $v) {
    if($v > 10) {
        $count ++;
        }     
    }
}
echo "Masyve didesnių reikšmių už 10 viso yra: $count";

echo '<br>----------2b----------<br>';
$max = PHP_FLOAT_MIN;
foreach ($arr as $key => $value) {
    foreach ($value as $k => $v) {
    if($v > $max) {
        $max = $v;
        }    
    }
}
echo "Didžiausia masyvo reikšmė yra: $max";

echo '<br>----------2c----------<br>';
$k0 = 0;
$k1 = 0;
$k2 = 0;
$k3 = 0;
$k4 = 0;
foreach ($arr as $key => $value) {
    foreach ($value as $k => $v) {
    if($k === 0) {
        $k0 += $v;      
    }
    if($k === 1) {
        $k1 += $v;      
    }
    if($k === 2) {
        $k2 += $v;      
    }
    if($k === 3) {
        $k3 += $v;      
    }
    if($k === 4) {
        $k4 += $v;      
    }
    }
}
print_r(" [0] = $k0, [1] = $k1, [2] = $k2, [3] = $k3, [4] = $k4");

echo '-----kitas variantas 2c-----------';
$arrSum = [0, 0, 0, 0, 0];
foreach ($arr as $key => $value) {
    foreach ($value as $k => $v) {
$arrSum[$k] += $v;
    }
}

print_r($arrSum);

echo '<br>----------2d----------<br>';
foreach ($arr as $key => $value) {
    for ($i=5; $i < 7; $i++) { 
        $arr[$key][$i] = rand(5, 25);
    }
}
    print_r($arr);

echo '<br>----------2e----------<br>';
$new_arr = [];
foreach ($arr as $key => $value) {
    $sum = 0;
    foreach ($value as $k => $v) {
        $sum += $v;
}
array_push($new_arr, $sum);
}
print_r($new_arr);


// $arr_new = [];
// $sum = 0;
// for($i=0; $i<10; $i++){
//     $sum = array_sum($arr[$i]);
//     $arr_new[] = $sum;
// }
// print_r($arr_new);

echo '<br>----------3----------<br>';
// $letters = range('A', 'Z');
$arr_1 =[];

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < rand(2, 20); $j++) { 
        $arr_1[$i][$j] = chr(rand(65, 90));
    }
}
print_r($arr_1);

foreach ($arr_1 as $key => &$value){
        sort($value);  
}
print_r($arr_1);

echo '<br>----------4----------<br>';

//jei turi k raide

usort($arr_1, function($a, $b){
$bk = (int)str_contains(implode('', $b), 'K');
$ak = (int)str_contains(implode('', $a), 'K');

if($bk + $ak) {
    return $bk <=> $ak;
    }
    return count($a) <=> count($b);
});

print_r($arr_1);

echo '<br>----------5----------<br>';

$users = [];
$check_arr = [];
do { 
    $random1 = rand(1, 1000000);
    $random2 = rand(0, 100);
    if (!in_array($random1, $check_arr)){
    $users[sizeof($users)]['user_id'] = $random1;
    $users[sizeof($users)-1]['place_in_row'] = $random2;
    array_push($check_arr, $random1);
    }
} while(sizeof($users) < 30);
print_r($users);


echo '<br>----------6----------<br>';

$columns1 = array_column($users, 'user_id');
array_multisort($columns1, SORT_ASC, $users);
echo 'Išrūšiuotas masyvas pagal user_id didėjančia tvarka: <br>';
print_r($users);

$columns2 = array_column($users, 'place_in_row');
array_multisort($columns2, SORT_DESC, $users);
echo 'Išrūšiuotas masyvas pagal place_in_row mažėjančia tvarka: <br>';
print_r($users);

echo '<br>----------7----------<br>';

foreach ($users as $key => $value) {
    $random_string1 = '';
    $random_length1 = rand(5, 15);
    for ($i=0; $i < $random_length1; $i++) { 
        $random_string1 .= chr(rand(65, 90));
    }
    $random_string2 = '';
    $random_length2 = rand(5, 15);
    for ($i=0; $i < $random_length2; $i++) { 
        $random_string2 .= chr(rand(65, 90));
    }

    $users[$key]['name'] = $random_string1;
    $users[$key]['surname'] = $random_string2;
}
print_r($users);

echo '<br>----------8----------<br>';

$arr = [];
for ($i=0; $i < 10; $i++) { 
    $rand = rand(0, 5);
    if ($rand == 0){
        $arr[$i] = rand(0, 10);
        continue;
    } else {
    for ($j=0; $j < $rand; $j++) { 
        $arr[$i][$j] = rand(0, 10);  
        } 
    }
}

print_r($arr);

echo '<br>----------9----------<br>';
    
   usort($arr, function($a, $b){
    $_1 = 0;
    $_2 = 0;
       if (is_array($a) ) {
           $_1 = array_sum($a);
       } else {
           $_1 = $a;
       }
       if (is_array($b)) {
            $_2 = array_sum($b);
       } else {
        $_2 = $b;
       }
       return $_1 <=> $_2;
   });
   print_r($arr);


echo '<br>----------10----------<br>';


$value = ['#', '%', '+', '*', '@', '裡'];
$color = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E','F'];

$arr = [];
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $arr[$i][$j]['value'] = $value[rand(0, 5)];
        $arr[$i][$j]['color'] = '#'.$color[rand(0, 15)].$color[rand(0, 15)].$color[rand(0, 15)].$color[rand(0, 15)].$color[rand(0, 15)].$color[rand(0, 15)];
    }
}

echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
 foreach($arr as $key => $inner_arr){
     foreach ($inner_arr as $k => $v) {
       ?> 
       <body>
       <span style="line-height:20px; color: <?=$inner_arr[$k]['color']?>;"><?=$inner_arr[$k]['value']?></span>
        </body> 
      <?php  
     }
     echo '<br>';
 }

