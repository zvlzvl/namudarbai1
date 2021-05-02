<?php
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'));





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Add money</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="./authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="./account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="./new_account.php">Nauja sąskaita</a></button>
                <button class="menu-button"><a href="./login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>