<?php
session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'), 1);
$acc = $_GET['clientACC'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($clients as $client => $value) {
            if ($value['account'] === $acc) {
                $fullName = $value['name'] . ' ' . $value['surname'];
                if ($value['remainder'] > 0) {
                  $_SESSION['message'] = "Negalime ištrinti $fullName sąskaitos. Sąskaitoje yra pinigų!";
                  $_SESSION['delete'] = 0;
                  $_SESSION['msg_type'] = 'error';
                  header("Location: http://localhost/namudarbai/bank/account_list.php");
                  die;
                } 
                else {
                  $_SESSION['message'] = "$fullName Sąskaita sėkmingai ištrinta!";
                  $_SESSION['delete'] = 1;
                  $_SESSION['msg_type'] = 'ok';
                  unset($clients[$client]);
                  file_put_contents(__DIR__.'/clients.json', json_encode($clients));
                  header('Location: http://localhost/namudarbai/bank/account_list.php');
                  die;
                }
              } 
            }
          }







    

