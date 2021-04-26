<?php
echo '<pre>';
$burbulas = '98';

function Funkcijos_vardas($param1, $param2, int $b) 
{
    // global $burbulas;// blogas stilius

   
    return $param1 + $param2 + $b;
}

$arg1 = 2;
$arg2 = 3;

var_dump(funkcijos_vardas($arg1, $arg2, $burbulas));

function foo() {
    static $index = 0; //static 
    $index++;
    echo "$index<br>";
}
foo();
foo();
foo();


function recursive($num){
    echo $num, '<br>';
    if($num < 50){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
}
$startNum = 1;
recursive($startNum);



// this text was used in 2002
// we want to get this up to date for 2003
$text = "April fools day is 04/01/2002\n";
$text.= "Last christmas was 12/24/2001\n";
// the callback function
function next_year($matches)
{
  // as usual: $matches[0] is the complete match
  // $matches[1] the match for the first subpattern
  // enclosed in '(...)' and so on
  return $matches[1].($matches[2]+1);
}
echo preg_replace_callback(
            "|(\d{2}/\d{2}/)(\d{4})|",
            "next_year",
            $text);
