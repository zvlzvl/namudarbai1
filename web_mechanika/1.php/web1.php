
<?php

if(!isset($_GET['color'])){
    ?> 
    <body style="background-color: black">
    <a href="http://localhost/bebras/web1.php">web1</a>
    <a href="http://localhost/bebras/web1.php?color=1" action="" method="get">web1/color</a>
    </body>
    <?php
}
elseif ($_GET['color'] == '1') {
    ?> 
    <body style="background-color: red">
    <a href="http://localhost/bebras/web1.php">web1</a>
    <a href="http://localhost/bebras/web1.php?color=1" action="" method="get">web1/color</a>
    </body>
    <?php
} else {
    ?> 
    <body style="background-color: black">
    <a href="http://localhost/bebras/web1.php">web1</a>
    <a href="http://localhost/bebras/web1.php?color=1" action="" method="get">web1/color</a>
    </body>
    <?php
}