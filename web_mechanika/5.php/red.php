<body style="background-color: red">
    </body>
<?php
if(isset($_GET['link'])){
    header("Location: http://localhost/namudarbai/web_mechanika/5.php/blue.php");
}else{
    echo '<a href="http://localhost/namudarbai/web_mechanika/5.php/red.php?link=1">Linkas</a>';
}
?>