<?php
session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'));
$msg = '';
if (isset($_SESSION['message'])) {
    $msg = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'] == 'ok' ? 'success' : 'danger';
    unset($_SESSION['message'], $_SESSION['msg_type']);
}

//generate random account number not existing
function randomAccount(){
    $bankNumber = "LT1212345";
    $randomNumber = null;
    for ($i=0; $i < 11; $i++) { 
        $randomNumber.= rand(0, 9);
    }
    $accountNumber = $bankNumber.$randomNumber;
    return $accountNumber;
    foreach ($clients as $client) {
        if ($client->account === $accountNumber){   
            return randomAccount();
        }
    }
    return $accountNumber;    
    }



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!file_exists('clients.json')) {
        $newClient[0] = [
        'account' => randomAccount(),
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'id' => $_POST['id'],
        'remainder' => $_POST['remainder'] ?? 0,
        ];
        file_put_contents(__DIR__.'/clients.json', json_encode($newClient));
        $_SESSION['message'] = 'Sąskaita sukurta';
        $_SESSION['msg_type'] = 'ok';
        header('Location: http://localhost/namudarbai/bank/account_list.php');
        die;
    }
    else {
        foreach ($clients as $client) {
            if ($_POST['id'] === $client->id){ 
                $_SESSION['message'] = 'Toks asmens kodas jau egzistuoja';
                $_SESSION['msg_type'] = 'error';
                header('Location: http://localhost/namudarbai/bank/new_account.php');
                die;
            }
        }
        $newClient = [
        'account' => randomAccount(),
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'id' => $_POST['id'],
        'remainder' => $_POST['remainder'] ?? 0,
        ];
        $clients[] = $newClient;
        file_put_contents(__DIR__.'/clients.json', json_encode($clients));
        $_SESSION['message'] = 'Sąskaita sukurta';
        $_SESSION['msg_type'] = 'ok';
        header('Location: http://localhost/namudarbai/bank/account_list.php');
        die;
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
    <title>New account</title>
</head>
<body>
    <div class="wraper">
        <div class="navbar">
            <nav>
                <button class="menu-button"><a href="./authorized.php">Į pradžia</a></button>
                <button class="menu-button"><a href="./account_list.php">Sąskaitų sąrašas</a></button>
                <button class="menu-button"><a href="./add_money.php">Pridėti lėšas</a></button>
                <button class="menu-button"><a href="./deduct_money.php">Nuskaičiuoti lėšas</a></button>
                <button class="menu-button"><a href="./login.php?logaut">Atsijungti</a></button>
            </nav>
        </div>
        <?php if ($msg): ?>
        <div class="alert alert-<?= $msgType ?>" role="alert"><?= $msg ?></div>
        <?php endif ?>
    <main class="new outer-box">

        <form action="" method="post">
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