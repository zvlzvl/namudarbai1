<?php
$bgColor = !isset($_GET['color']) || 1 == $_GET['color'] ? 'black' : 'red';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web1</title>
</head>
<body style="background-color:<?=$bgColor ?>;">
<a style="color: white" href="?color=1">black</a>
<a style="color: white" href="?color=2" action="" method="get">red</a>
</body>
</html>




