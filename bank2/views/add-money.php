<?php
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
                <button class="menu-button"><a href="<?= URL ?>authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="<?= URL ?>account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="<?= URL ?>new_account.php">Nauja sąskaita</a></button>          
                <button class="menu-button"><a href="<?= URL ?>login.php?logaut">Atsijungti</a></button>
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
             
                <tr class="table-content">
                    <td><?= $client->account ?></td>
                    <td><?= $client->name ?></td>
                    <td><?= $client->surname?></td>
                    <td><?= $client->id ?></td>
                    <td><?= $client->remainder ?></td>
                </tr>
            </table>

            <form action="<?= URL ?>add_money/<?= $client->id ?>" method="post">
                <label for="quantity" >Įrašykite norimą pridėti sumą:</label>
                <input type="number" id="quantity" name="plus" value="<?= $client->remainder ?>"></input>
                <button class="submit-button" type="submit">Papildyti sąskaitą</button>
            </form>
        </main>
    </div>
</body>
</html>