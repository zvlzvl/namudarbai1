<?php

session_start();
$clients = json_decode(file_get_contents(__DIR__.'/clients.json'), 1);
$acc = $_GET['clientACC'];

        foreach ($clients as $client => $value) {
            if ($value['account'] === $acc) {
                $fullName = $value['name'] . ' ' . $value['surname'];
                if ($value['remainder'] > 0) {
                  $_SESSION['msg'] = "Cannot delete $fullName account. Account balance is not empty!";
                  $_SESSION['msg_status'] = 0;
                  header("Location: http://localhost/namudarbai/bank/account_list.php");
                  die;
                } else {
                  $_SESSION['msg'] = "$fullName Account was succesfully deleted!";
                  $_SESSION['msg_status'] = 1;
                  unset($clients[$client]);
                  file_put_contents(__DIR__.'/clients.json', json_encode($clients));
                  header('Location: http://localhost/namudarbai/bank/account_list.php');
                  die;
                }
              } 
            }







    

