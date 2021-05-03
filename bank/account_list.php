<?php
session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'));
$msg = '';
if (isset($_SESSION['message'])) {
    $msg = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'] == 'ok' ? 'success' : 'danger';
    unset($_SESSION['message'], $_SESSION['msg_type']);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./layout.css">
    <link rel="stylesheet" href="./table.css">
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
            <td>Pavarde</td>
            <td>Asmens kodas</td>
            <td>Likutis</td>
            <td>Pridėti lėšų</td>
            <td>Nuskaityti lėšas</td>
        </tr>

        
      <?php foreach($clients as $client) : ?>
        <tr class="table-content">
          <td><?= $client->account ?></td>
          <td><?= $client->name ?></td>
          <td><?= $client->surname?></td>
          <td><?= $client->id ?></td>
          <td><?= $client->remainder ?></td>
          <td><button class="delete-button"><a href="http://localhost/namudarbai/bank/add_money.php">pridėti</a></button></td>
          <td><button class="delete-button"><a href="http://localhost/namudarbai/bank/deduct_money.php">nuimti</a></button></td>
          <td><button class="delete-button" name="delete">Ištrinti</button></td>
        </tr>
        <?php endforeach ?>
  </table>
</section>

      </div>
      </body>
      </head>