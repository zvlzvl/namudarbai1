<?php
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
                <button class="menu-button"><a href="<?= URL ?>authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="<?= URL ?>new_account.php">Nauja sąskaita</a></button>          
                <button class="menu-button"><a href="<?= URL ?>login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>
                  
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
                foreach($clients as $client) : ?>
                <tr class="table-content">
                    <td><?= $client->account ?></td>
                    <td><?= $client->name ?></td>
                    <td><?= $client->surname?></td>
                    <td><?= $client->id ?></td>
                    <td><?= $client->remainder ?></td>
                    <td><button class="btn delete-button"><a href="<?= URL ?>add_money.php?add=<?=$client->account?>" method="post">Pridėti</a></button> 
                    <td><button class="btn delete-button"><a href="<?= URL ?>deduct_money.php?deduct=<?=$client->account?>" method="post">Nuimti</a></button> 
                    <td>
                        <form action="<?= URL ?>delete.php?clientACC=<?=$client->account?>" method="post">
                            <input type="hidden" name="account" value="<?=$client->account?>">
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