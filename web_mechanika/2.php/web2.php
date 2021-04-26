
<?php

if(!isset($_GET['color'])){
    ?> 
    <body style="background-color: black">
    <a href="http://localhost/bebras/web2.php">web2</a>
    </body>
    <?php
}
else  {
    ?> 
    <body style="background-color: <?=$_GET['color']?>">
    <a href="http://localhost/bebras/web2.php">web2</a>
    </body>
    <?php
} 