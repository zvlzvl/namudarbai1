<?php
echo '<br>----------1----------<br>';

$name = 'Živilė';
$surname = 'Vibrė';
$bornYears = 1984;
$age = 2021 - 1984;
echo "Aš esu $name $surname. Man yra $age metai(ų).";

echo '<br>----------2----------<br>';

$first = rand(1, 4);
$second = rand(1, 4);

if ($first >= $second) {
    echo "pirmas: $first, antras: $second. Rezultatas: " . round(($first / $second), 2);
} else {
    echo "pirmas: $first, antras: $second. Rezultatas: " . round(($second / $first), 2);
};

echo '<br>----------3----------<br>';

$_1 = rand(0, 25);
$_2 = rand(0, 25);
$_3 = rand(0, 25);

if ($_1 < $_2 && $_1 > $_3) {
    echo "$_1 $_2 $_3 Vidurinis: $_1";
} elseif ($_1 < $_3 && $_1 > $_2) {
    echo "$_1 $_2 $_3 Vidurinis: $_1";
} elseif ($_2 < $_3 && $_2 > $_1) {
    echo "$_1 $_2 $_3 Vidurinis: $_2";
} elseif ($_2 < $_1 && $_2 > $_3) {
    echo "$_1 $_2 $_3 Vidurinis: $_2";
} elseif ($_3 < $_1 && $_3 > $_2) {
    echo "$_1 $_2 $_3 Vidurinis: $_3";
} elseif ($_3 < $_2 && $_3 > $_1) {
    echo "$_1 $_2 $_3 Vidurinis: $_3";
} else {
    echo "Yra lygiu, vidurinis neegzistuoja.";
}

echo '<br>----------4----------<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ($a + $b >= $c && $a + $c >= $b && $b + $c >= $a) {
    echo "Kraštinės: $a $b $c sudaro trikampi";
} else {
    echo "Iš kraštinių: $a $b $c trikampio nebus";
}
echo '<br>----------5----------<br>';

$number1 = rand(0, 2);
$number2 = rand(0, 2);
$number3 = rand(0, 2);
$number4 = rand(0, 2);
$zero = 0;
$one = 0;
$two = 0;

if ($number1 === 0) {
    $zero += 1;
} else if ($number1 === 1) {
    $one += 1;
} else {
    $two += 1;
}
if ($number2 === 0) {
    $zero += 1;
} else if ($number2 === 1) {
    $one += 1;
} else {
    $two += 1;
}
if ($number3 === 0) {
    $zero += 1;
} else if ($number3 === 1) {
    $one += 1;
} else {
    $two += 1;
}
if ($number4 === 0) {
    $zero += 1;
} else if ($number4 === 1) {
    $one += 1;
} else {
    $two += 1;
}
echo "skaiciai: $number1, $number2, $number3, $number4. Nuliuku: $zero, vienetuku: $one, dvejetuku: $two";

echo '<br>----------6----------';

$number = rand(1, 6);
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
    <h3><?= $number ?></h3>
</body>

</html>
<?php

echo '----------7----------';

$n1 = rand(-10, 1);
$n2 = rand(-10, 1);
$n3 = rand(-10, 1);

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
    <?php if ($n1 < 0) : ?>
        <h3 style="color: green"><?= $n1 ?></h3>
    <?php elseif ($n1 === 0) : ?>
        <h3 style="color: red"><?= $n1 ?></h3>
    <?php else : ?>
        <h3 style="color: blue"><?= $n1 ?></h3>
    <?php endif ?>

    <?php if ($n2 < 0) : ?>
        <h3 style="color: green"><?= $n2 ?></h3>
    <?php elseif ($n2 === 0) : ?>
        <h3 style="color: red"><?= $n2 ?></h3>
    <?php else : ?>
        <h3 style="color: blue"><?= $n2 ?></h3>
    <?php endif ?>

    <?php if ($n3 < 0) : ?>
        <h3 style="color: green"><?= $n3 ?></h3>
    <?php elseif ($n3 === 0) : ?>
        <h3 style="color: red"><?= $n3 ?></h3>
    <?php else : ?>
        <h3 style="color: blue"><?= $n3 ?></h3>
    <?php endif ?>
</body>

</html>
<?php
echo '<br><br>----------8----------<br><br>';

$zvakiu_kiekis = rand(5, 3000);

if ($zvakiu_kiekis < 1000) {
    echo "pirko $zvakiu_kiekis žvakių. Jų kaina: $zvakiu_kiekis eur.";
} elseif ($zvakiu_kiekis >= 1000 && $zvakiu_kiekis < 2000) {
    echo "pirko $zvakiu_kiekis žvakių. Jų kaina:" . ($zvakiu_kiekis - $zvakiu_kiekis * 0.03) . " eur.";
} else {
    echo "pirko $zvakiu_kiekis žvakių. Jų kaina:" . ($zvakiu_kiekis - $zvakiu_kiekis * 0.04) . " eur.";
}
echo '<br><br>----------9----------<br>';

$num1 = rand(0, 100);
$num2 = rand(0, 100);
$num3 = rand(0, 100);

$aritmetinis_vidurkis = round(($num1 + $num2 + $num3) / 3);
$num_total = 3;
echo "Skaičių: $num1, $num2, $num3 aritmetinis vidurkis: $aritmetinis_vidurkis, o ";

if ($num1 < 10 || $num1 > 90) {
    $num1 = 0;
    $num_total -= 1;
}
if ($num2 < 10 || $num2 > 90) {
    $num2 = 0;
    $num_total -= 1;
}
if ($num3 < 10 || $num3 > 90) {
    $num3 = 0;
    $num_total -= 1;
}
echo "Skaičių nuo 10 iki 90 aritmetinis vidurkis: " . round(($num1 + $num2 + $num3) / $num_total);

echo '<br><br>----------10----------<br>';

$h = rand(0, 23);
$min = rand(0, 59);
$s = rand(0, 59);
$plus_seconds = rand(0, 300);
$plus_min = floor($plus_seconds / 60);
$left_s = $plus_seconds - $plus_min * 60;

echo "Pradžioje valandų: $h h: $min min: $s: s.";
echo '<br>';
echo "Pridejus $plus_seconds s.";

$s += $left_s;
if ($s > 59) {
    $min += 1;
    $s = $s - 60;
} else {
    $s = $s;
}
$min += $plus_min;
if ($min > 59) {
    $h += 1;
    $min = $min - 60;
}
if ($h > 23) {
    $h = 0;
}
echo '<br>';
echo " Bus: $h h: $min min: $s s";
