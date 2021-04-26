<?php
?>

<form action="" method="get">
    <button type="submit">GET</button>
</form>

<form action="" method="post">
    <button type="submit">POST</button>
</form>

<?php


if(isset($_GET['color'])) {
    ?> 
    <body style="background-color: green">
    </body>
    <?php
} 
elseif(isset($_POST['color'])) {
    ?> 
    <body style="background-color: yellow">
    </body>
    <?php
} 