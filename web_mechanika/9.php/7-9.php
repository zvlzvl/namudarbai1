<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$letters = range('A', 'J');

$color = 'black';
$count = rand(3, 10);

ob_start(); //<--- niekas nieko neechoina
    ?>
    <form action="" method="post">
    <?php
for ($i=0; $i<$count; $i++) {
    ?>
        <label><?= $letters[$i] ?></label>
        <input type="checkbox" name="<?= $letters[$i] ?>">
    <?php
}
?>
    <input type="hidden" name="counter" value="<?= $count ?>">
    <button type="submit">GO!</button>
    </form>
<?php
$form = ob_get_contents();
ob_end_clean();
}
else {
    ob_start(); //<--- niekas nieko neechoina
    ?>
    <h1>Buvo pačekinta <?= count($_POST) - 1 ?>, o viso buvo <?= $_POST['counter'] ?>
    <?php

    $form = ob_get_contents();
    ob_end_clean();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BLACK</title>
</head>
<body style="background-color:<?= $color ?>;color:red;">
    
    <?= $form ?>

</body>
</html>