<?php
session_start();

$form = '';
if (!isset($_POST['checkbox'])){
    $bg = 'black'; 
    $kiekSugeneruota = rand(3,10);
    $_SESSION['kiek'] = $kiekSugeneruota;
for ($i=0; $i < $kiekSugeneruota ; $i++) { 
    $letter = chr(rand(65,90));
    $form .="$letter <input type='checkbox' name='checkbox[]'/><br>";
}
$form.= "<button type='submit'>click</button>";
} else {
    $bg='white';
    $kiekPaspausta = count($_POST['checkbox']);
    $kiekSugeneruota = $_GET['kiek'];
    $form = "buvo sugeneruota: $kiekSugeneruota | bovo pazymeta: $kiekPaspausta";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>

<body style='background: <?= $bg ?>;color: red; font-size:2rem;'>
    <form action="?kiek=<?= $kiekSugeneruota ?>" method='post'>
        <?= $form ?>
    </form>
</body>
</html>