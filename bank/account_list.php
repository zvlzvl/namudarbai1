<?php
session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'), 1);

 if (isset($_SESSION['delete'])) {
    $msg = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'] == 'ok' ? 'success' : 'danger';
    unset($_SESSION['message'], $_SESSION['msg_type']);
} elseif (isset($_SESSION['add'])) {
    $msg = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'] == 'ok' ? 'success' : 'danger';
    unset($_SESSION['message'], $_SESSION['msg_type']);
}

function sortBySurname($a, $b) {
    return $a['surname'] <=> $b['surname'];
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Account list</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/new_account.php">Nauja sąskaita</a></button>          
                <button class="menu-button"><a href="http://localhost/namudarbai/bank/login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>
        
        <?php if ($msg): ?>
        <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
        <?php endif ?>
           
        <div class="accounts">
            <h4>Sąskaitų sarašas</h4>
        </div>

        <section class="inner-box">
            <table>
                <tr class="table-header">
                    <td>Sąskaitos numeris</td>
                    <td>Vardas</td>
                    <td>Pavardė</td>
                    <td>Asmens kodas</td>
                    <td>Likutis</td>
                    <td>Pridėti lėšų</td>
                    <td>Nuskaityti lėšas</td>
                </tr>    
                <?php 
                usort($clients, 'sortBySurname'); 
                foreach($clients as $client) : ?>
                <tr class="table-content">
                    <td><?= $client['account'] ?></td>
                    <td><?= $client['name'] ?></td>
                    <td><?= $client['surname']?></td>
                    <td><?= $client['id'] ?></td>
                    <td><?= $client['remainder'] ?></td>
                    <td><button class="btn delete-button"><a href="http://localhost/namudarbai/bank/add_money.php?add=<?=$client['account']?>" method="post">Pridėti</a></button> 
                    <td><button class="btn delete-button"><a href="http://localhost/namudarbai/bank/deduct_money.php?deduct=<?=$client['account']?>" method="post">Nuimti</a></button> 
                    <td>
                        <form action="http://localhost/namudarbai/bank/delete.php?clientACC=<?=$client['account']?>" method="post">
                            <input type="hidden" name="account" value="<?=$client['account']?>">
                            <button type="submit" class="delete-button">Ištrinti</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </section>
    </div>
</body>
</head>