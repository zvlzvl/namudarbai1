<body style="background-color: red">
    </body>
<?php
if(isset($_GET['link'])){
    header("Location: http://localhost/bebras/blue.php");
}else{
    echo '<a href="http://localhost/bebras/red.php?link=1">Linkas</a>';
}
?>