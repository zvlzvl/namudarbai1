<?php

$form = '';
if (!isset($_POST['checkbox'])){
    $bg = 'black'; 
for ($i=0; $i < rand(3, 10) ; $i++) { 
    $letter = chr(rand(65,90));
    $form .="$letter <input type='checkbox' name='checkbox[]'/><br>";
}
$form.= "<button type='submit'>sumuok</button>";
} else {
    $bg='white';
    $kiekPaspausta = count($_POST['checkbox']);
    $form = "<span>buvo pazymeta: $kiekPaspausta</span>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9</title>
</head>

<body style='background: <?= $bg ?>;color: red; font-size:2rem;'>
<form action="" method='post'>
        <?= $form ?>
</form>
</body>
</html>