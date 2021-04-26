<?php
?>

<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">SPALVA</button>
</form>

<?php

if(!isset($_GET['color'])){
  echo 'Labas ivesk spalvą!';
}
else {
    ?> 
    <body style="background-color: <?=$_GET['color']?>">
    <a href="http://localhost/namudarbai/web_mechanika/3.php/web3.php">web3</a>
    </body>
    <?php
} 