

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $color ='yellow';
} 
else { 
    $color = 'green';
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
        <button type="submit" value="GET">GET</button>
    </form>

    <form action="" method="post">
        <button type="submit" value="POST">POST</button>
    </form>
</body>
</html>



