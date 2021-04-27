<?php
if (isset($_POST['x']) && isset($_POST['y'])) {
    $rezultatas = (int)$_POST['x'] + (int)$_POST['y'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumuoti</title>
</head>
<body>
    <form action="" method = 'post'>
    x: <input type="text" name = "x"><br>
    y: <input type="text" name = "y"><br>
    <button type="submit" name = "Sumuoti">Sumuoti</button>
    </form>
    <h1>Atsiustu skaiciu (x) ir (y) suma lygi <?= $rezultatas ?? 'nieko' ?>.</h1>
    <h1>Labas <?=$_GET['labas'] ?? 'nieko' ?>.</h1>
</body>
</html>