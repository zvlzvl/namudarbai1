<?php
if (!empty($_POST)){
    header('Location: http://localhost/namudarbai/web_mechanika/6.php/mygtukai.php?button=post');
    exit;
}
if (!empty($_GET) && !isset($_GET['from'])) {
    $color = 'green';
} else {
    $color = 'yellow';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mygtukai</title>
</head>
<body style="background-color: <?=$color?>;">
    <form action="" method="get">
        <button type="submit">GET</button>
    </form>

    <form action="" method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>

