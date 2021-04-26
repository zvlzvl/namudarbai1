<body style="background-color: pink">
<form action="" method="post">
    <input type="text" name="pink">
    <button type="submit">GO TO ROSE</button>
</form>
</body>
<?php

if(!isset($_POST=1)) {
    header('Location: http://localhost/bebras/rose.php');
  
}