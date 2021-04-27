<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!isset($_POST['apklausa'])){
        $_SESSION['answer'] = 'Pasirink atsakymą!';
    }
elseif ($_POST['apklausa']== 3) {
    $_SESSION['answer'] = 'Atsakymas teisingas. Šunuolis!';
}
else {
    $_SESSION['answer'] = 'Neteisingas atsakymas!';
}
header('Location: http://localhost/namudarbai/web_mechanika/extra.php/bebras-atsakymas.php');
    die;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apklausa</title>
    <style>
    i {
        display: inline-block;
        width: 100px;
    }
    button {
        margin-top: 15px;
        padding: 2px 30px 2px 30px;

    }
    </style>
</head>
<body>
    <h1 style="color: brown; font-size:30px">Apklausa</h1>

    <img src="http://www.bigcheese.karoo.net/beaver1.jpg" alt="apklausa" style="width: 40%; float: left;">
    <form action="" method="post" style="padding: 20px; float: left; width: calc(50% - 40px)">
    <h2>Koks tai gyvūnas?</h2>
    <i>Zuikis <input type="radio" name="apklausa" value="1" style="float: right;"></i><br>
    <i>Kiskis <input type="radio" name="apklausa" value="2" style="float: right;"></i><br>
    <i>Bebras <input type="radio" name="apklausa" value="3" style="float: right;"></i><br>
    <i>Barsukas <input type="radio" name="apklausa" value="4" style="float: right;"></i><br>
    <button type= "submit">Spėti</button>
    </form>
</body>
</html>