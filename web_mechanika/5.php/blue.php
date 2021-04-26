<body style="background-color: blue">
    </body>
<?php
if(isset($_GET['link'])){
    header("Location: http://localhost/namudarbai/web_mechanika/5.php/red.php");
}else{
    echo '<a href="http://localhost/namudarbai/web_mechanika/5.php/blue.php?link=1">Linkas</a>';
}
?>