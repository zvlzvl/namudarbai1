<?php
echo '<br>----------1----------<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<span>
    <?php 
    for ($i=0; $i < 300 ; $i++) {
        echo '* '; 
    }
    
    for ($i=0; $i < 300 ; $i++) {
        if ($i%50 == 0){
           echo '<br>';
        } 
       echo '*';
    }
  ?>
    </span>
    <?php 

echo '<br>----------2----------<br>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$more_150 = 0;
for ($i=0; $i < 300 ; $i++) {
    $sk = rand(1,300); 
    if ($sk > 150){
        $more_150 +=1;
    }
    if ($sk > 275):?>
        <span style="color: red"><?=$sk?></span>
    <?php 
    else: ?>
        <span><?=$sk?></span>
    <?php endif ?>     
<?php 
}
echo "<br><br> Skaičių didesnių nei 150 yra: $more_150. ";

echo '<br>----------3----------<br>';

for ($i=1; $i < $rand = rand(3000,4000); $i++) { 
    if ($i % 77 == 0 && $i != 77){
    echo ', '.$i;
    }
    elseif ($i % 77 == 0 && $i ==77){
     echo $i;   
    }
}
echo '<br>----------4----------<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="line-height: 8px;">

    <?php 

    for ($i=0; $i < 26 ; $i++) {
        for ($j=0; $j < 26; $j++) { 
            echo '*';   
        }
        echo '<br>';
    }
?>
    </div>
    <?php 

    echo '<br>----------5----------<br>';
    for ($i = 1; $i<=10; $i++){ 

        for($j = 1; $j<=10; $j++){
    
            if($i==$j){echo "<span style='color: red'>*</span>"; }
            else if($i+$j==11){echo "<span style='color: red'>*</span>"; }

         else {echo "*";}}
    
        echo '<br>';
    
    }
    echo '<br>----------6a----------<br>';

    do {
        $moneta = rand(0, 1);
        if ($moneta == 0){
            echo 'Iškrito: H <br>';
        }
        else{
            echo 'Iškrito: S <br>';
        }
 } while ($moneta != 0);

 echo '<br>----------6b----------<br>';
 $herbas=0;
 do {
     $moneta = rand(0, 1);
     if ($moneta == 0){
         echo 'Iškrito: H <br>';
         $herbas += 1;
     }
     else{
         echo 'Iškrito: S <br>';
     }
} while ($herbas != 3);

echo '<br>----------6c----------<br>';
$herbas='';
 do {
     $moneta = rand(0, 1);
     if ($moneta == 0){
         echo 'Iškrito: H <br>';
         $herbas .= 'h';
     }
     else{
         echo 'Iškrito: S <br>';
         $herbas = '';
     }
} while ($herbas != 'hhh');

echo '<br>----------7----------<br>';

$petro_total=0; // random laimetojas jei lygu
$kazio_total=0;
$total = 0;
do {
    $petro = rand(10, 20);
    $petro_total += $petro;
    $kazio = rand(5, 25);
    $kazio_total += $kazio;
 
if ($petro_total > $kazio_total){
    $winner = 'Petras';
}else {
    $winner = 'Kazys';
}
}while ($petro_total <= 222 && $kazio_total <=222);
echo "Petro taškai: $petro_total, Kazio taškai: $kazio_total. Partija laimėjo $winner.";

echo '<br>----------8----------<br>';
$rombas= 'div style="display: inline-block; width: 45%; text-align: center; line-height: 20px; font-size: 40px;">   ';
$more = 0;
$less = 10;
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++){
    $rgb= rand(0,255).', '.rand(0,255).', '.rand(0,255);
    $rombas .='<div style="display:inline; color: rgb(' .$rgb . '">*</div>';
    if($j == $less){
        $less--;
        break;
    }
    if($j == $more) {
        $more++;
        break;
    }
} 
$rombas .='<br>';
}
echo $rombas . '</div>';


//     for ($j = 2 * $i - 1; $j > 0; $j--) 
//         echo "*";  
//     ?>
//     </span>
//     <?php
//     echo "<br>";
// } 

// $n = 21;
// for ($i = 21; $i > 0; $i--) {
//     for ($j = $n - $i; $j > 0; $j--)
//         echo "&nbsp&nbsp;";
//         ?>
//         <span style="line-height: 8px; color: rgb(<?=rand(0,255).', '.rand(0,255).', '.rand(0,255)?>)">
//         <?php 
//     for ($j = 2 * $i - 1; $j > 0; $j--)
//         echo ("*");
//         ?> 
//         </span>
//         <?php
//     echo "<br>";
// }
// ?> 
// </div>
// <?php

echo '<br>----------9----------<br><br>';
    
for ($i=0; $i < 1000000; $i++) { 
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
echo(microtime());

echo '<br><br>';

for ($i=0; $i < 1000000; $i++) { 
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
echo(microtime());


echo '<br>----------10a----------<br>';
$smugiu =0;
for ($i=0; $i < 5; $i++) { 
    $finish = false;
    $progress = 0;
while (!$finish) {
    $gylis = rand(5, 20);
    $progress +=$gylis;
    $smugiu++;

    if($progress >= 85){
        $finish = true;
    }
    }
}
echo "<br> Viso smugių: $smugiu";

echo '<br><br----------10b----------<br<br>';

$smugiu = 0;
for ($i=0; $i < 5; $i++) { 
    $finish = false;
    $progress = 0;
    while (!$finish) {
        if (rand(0,1)== 0) {
            $smugiu++;
            continue;
        } else {
            $gylis = rand(20, 30);
            $progress +=$gylis;
            $smugiu++;
        }
        if($progress >= 85){
            $finish = true;
        }
    }
}
echo "<br> Viso smugių: $smugiu";

