<?php
echo '<br>----------1----------<br>';
$name = 'Demi';
$lastName = 'Moore';
echo "kintamieji: $name $lastName <br>";

if (strlen($name) < strlen($lastName)) {
    echo "Vardas $name trumpesnis už pavardę.";
} elseif (strlen($lastName) < strlen($name)) {
    echo "Pavardė $lastName trumpesnė už vardą.";
} else {
    echo "Vardas ir pavardė vienodo ilgio!";
}

echo '<br>----------2----------<br>';

$name = 'Nicole';
$lastName = 'Kidman';
echo "kintamieji: $name $lastName <br>";

echo strtoupper($name) . " " . strtolower($lastName);

echo '<br>----------3----------<br>';

$name = 'Demi';
$lastName = 'Moore';
echo "kintamieji: $name $lastName <br>";

$initials = "Inicialai: " . substr($name, 0, 1) . substr($lastName, 0, 1);
echo $initials;

echo '<br>----------4----------<br>';

$name = 'Nicole';
$lastName = 'Kidman';
echo "kintamieji: $name $lastName <br>";

$last_3 = substr($name, -3) . substr($lastName, -3);

echo $last_3;

echo '<br>----------5----------<br>';

$movie = 'An American in Paris';
echo $movie . '<br>';

$pattern = "/[Aa]/i";
echo preg_replace($pattern, "*", $movie);

echo '<br>----------6----------<br>';

$movie = 'An American in Paris';
echo $movie . '<br>';

$pattern = "/[Aa]/i";
echo preg_match_all($pattern, $movie);
// echo substr_count(strlolower($replaseA), strtolower('A'));

echo '<br>----------7----------<br>';
$movie1 = 'An American in Paris';
$movie2 = "Breakfast at Tiffany's";
$movie3 = '2001: A Space Odyssey';
$movie4 = "It's a Wonderful Life";
$pattern = "/[AaEeOoIiUuYy]/i";

echo preg_replace($pattern, "", $movie1);
echo '<br>';
echo preg_replace($pattern, "", $movie2);
echo '<br>';
echo preg_replace($pattern, "", $movie3);
echo '<br>';
echo preg_replace($pattern, "", $movie4);

echo '<br>----------8----------<br>';

$starWars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
$pattern = "/[^0-9]/i";

echo preg_replace($pattern, "", $starWars);

// $x = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
// $y = (int) filter_var($x, FILTER_SANITIZE_NUMBER_INT);
// echo $y;

// preg_match('/\d/', $someStr, $matches);
echo '<br>----------9----------<br>';

$phrase1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$phrase2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$arr_words1 = explode(' ', $phrase1);
$count_words = 0;
for ($i = 0; $i < count($arr_words1); $i++) {
    if (mb_strlen($arr_words1[$i]) <= 5) { // mb kai stringe zenklas gali tureti 2 raidziu dydi
        $count_words += 1;
    }
}
echo "Iš viso 5 ir mažiau raidžių žodžių yra: $count_words";


echo '<br>----------10----------<br>';

$charakters = 'abcdefghijklmnopqrstuvwxyz';
$number1 = rand(0, 24);
$number2 = rand(0, 24);
$number3 = rand(0, 24);

$random_string = $charakters[$number1] . $charakters[$number2] . $charakters[$number3];

echo $random_string;

echo '<br>----------11----------<br>';


$phraseTogether = $phrase1 . " " . $phrase2;
$words = explode(' ', $phraseTogether);
shuffle($words);

$result = "";

// $i = 0;
// while($i++ <10) {
//     $result .= $words[$i] . " ";
// }
// $result = ucfirst(trim(strtolower($result))) . '.';

echo $result;
