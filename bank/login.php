<?php
require __DIR__.'/bootstrap.php';

// scenarijus ISloginti

if (isset($_GET['logout'])) {
    $_SESSION['message'] = 'Jūs atsijungėte';
    $_SESSION['msg_type'] = 'ok';
    $_SESSION['logged'] = 0;
    unset($_SESSION['name']);
    header('Location: http://localhost/namudarbai/bank/login.php');
    die;
} 




// scenarijus loginti
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($users as $user) {
        if ($_POST['name'] === $user['name']) {
            if (md5($_POST['psw']) === $user['psw']) {
                $_SESSION['logged'] = 1;
                $_SESSION['message'] = 'Jūs prisijungėte';
                $_SESSION['msg_type'] = 'ok';
                $_SESSION['name'] = $user['name'];
                header('Location: http://localhost/namudarbai/bank/authorized.php');
                die;
            }
        }
    }
    $_SESSION['message'] = 'Neteisingas vardas sarba slaptažodis';
    $_SESSION['msg_type'] = 'error';
    header('Location: http://localhost/namudarbai/bank/login.php');
    die;
}

//scenarijus rodyti forma
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Hello</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="./index.php">Į pradžia</a></button>
                <button class="menu-button"><a href="./login.php">Prisijungti</a></button>
            </nav>
        </div>
    </div>

    <?php if ($msg): ?>
        <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
    <?php endif ?>
    <main class="login outer-box">
        <form action="./login.php" method="post">
            <div>
                <label id="name">Vardas</label>
                <input type="text" name="name" id="name" placeholder="Jūsų vardas">
            </div>
            <div>
                <label id="pasword">Slaptažodis</label>
                <input type="password" name="psw" id="pasword" placeholder="Jūsų slaptažodis">
            </div>
            <button class="submit-button" type="submit">Prisijungti</button>
        </form>
    </main>
</body>
</html>