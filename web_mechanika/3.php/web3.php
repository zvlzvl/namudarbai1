<?php
$bgColor = !isset($_GET['color']) ? 'white' : $_GET['color'];

?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>web3</title>
</head>
 <body style="background-color:<?=$bgColor ?>;">
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">SPALVA</button><br>
    <i>Labas, įrašyk spalvą!</i>
</form>
 <a href="http://localhost/namudarbai/web_mechanika/3.php/web3.php">web3</a>
 </body>
 </html>