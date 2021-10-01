<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>New account</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="<?= URL ?>authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="<?= URL ?>account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="<?= URL ?>login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>

        <main class="new outer-box">
            <form action="<?= URL ?>store" method="post">
                <div>
                    <label id="name">Vardas</label>
                    <input type="text" name="name" id="name" placeholder="Jūsų vardas" required>
                </div>
                <div>
                    <label id="surname">Pavardė</label>
                    <input type="text" name="surname" id="surname" placeholder="Jūsų pavardė" required>
                </div>
                <div>
                    <label id="id">Asmens kodas</label>
                    <input type="text" name="id" id="id" placeholder="Jūsų asmens kodas" required>
                </div>
                <button class="submit-button" type="submit">Suvesti</button>
             </form>
        </main>
    </div>
</body>
</html>