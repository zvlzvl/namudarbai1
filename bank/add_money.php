<?php

session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'), 1);
$acc = $_GET['add'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach($clients as $client => $value) {
        if($value['account'] == $acc){
            $val = $_POST['plus'];
            if ($val <= 0) {
                $_SESSION['message'] = "Prie sąskaitos nieko nepridėta!";
                $_SESSION['add'] = 0;
                $_SESSION['msg_type'] = 'error';
                header("Location: http://localhost/namudarbai/bank/account_list.php");
                die;
            }
            else {
                $fullName = $value['name'] . ' ' . $value['surname'];
                $val = $_POST['plus'];
                $clients[$client]['remainder'] += $_POST['plus'];
                $_SESSION['message'] = "$fullName Sąskaita papildyta $val eur!";
                $_SESSION['add'] = 1;
                $_SESSION['msg_type'] = 'ok';
                file_put_contents(__DIR__.'/clients.json', json_encode($clients));
                header('Location: http://localhost/namudarbai/bank/account_list.php');
                die;
            } 
        }
    }
}

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
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/new_account.php">Nauja sąskaita</a></button>          
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>
        <main class="outer-box"> 
            <table class="accountData inner-box">
                <tr class="table-header">
                    <td>Sąskaitos numeris</td>
                    <td>Vardas</td>
                    <td>Pavardė</td>
                    <td>Asmens kodas</td>
                    <td>Likutis</td>
                </tr>
                <?php foreach($clients as $client => $value)
                if ($value['account'] === $acc) : ?>
                <tr class="table-content">
                     <td><?= $value['account'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['surname']?></td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['remainder'] ?></td>
                </tr>
                <?php endif ?>
            </table>

            <form action="" method="post">
                <label for="quantity" >Įrašykite norimą pridėti sumą:</label>
                <input type="number" id="quantity" name="plus" min="0">
                <button class="submit-button" type="submit">Papildyti sąskaitą</button>
            </form>
        </main>
    </div>
</body>
</html>