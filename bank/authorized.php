<?php
require __DIR__.'/bootstrap.php';

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== 1) {
    header('Location: http://localhost/namudarbai/bankas/login.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Hello</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="./index.php">Į pradžią</a></button>
                <button class="menu-button"><a href="./account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="./new_account.php">Nauja sąskaita</a></button>
                <button class="menu-button"><a href="./add_money.php">Pridėti lėšas</a></button>
                <button class="menu-button"><a href="./deduct_money.php">Nuskaičiuoti lėšas</a></button>
                <button class="menu-button"><a href="./login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>
        <?php if ($msg): ?>
            <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
        <?php endif ?>
        <section class="inner-box">
            <h1>Prisijunges vartotojas: <?= $_SESSION['name'] ?></h1>
        </section>
   
    
    
    </div>
</body>
</html>