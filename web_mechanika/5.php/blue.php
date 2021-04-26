<body style="background-color: blue">
    </body>
<?php
if(isset($_GET['link'])){
    header("Location: http://localhost/bebras/red.php");
}else{
    echo '<a href="http://localhost/bebras/blue.php?link=1">Linkas</a>';
}
?>