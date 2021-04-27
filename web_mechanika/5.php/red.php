<?php
if(isset($_GET['link'])){
    header("Location: http://localhost/namudarbai/web_mechanika/5.php/blue.php");
}else{
    echo '<a href="http://localhost/namudarbai/web_mechanika/5.php/red.php?link=1">Linkas</a>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red</title>
</head>
<body style="background-color: red">
    
</body>
</html>
