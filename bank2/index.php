<?php
use App\ClientController;
require __DIR__. '/bootstrap.php';

$uri = explode('/',str_replace(INSTALL_DIR,'',$_SERVER['REQUEST_URI']));  // kelias, arba direktorija i papildomus puslapius.


if ('' == $uri[0]) {
    // naujas objektas ir iskvieciama funkcija index
    (new ClientController)->index();
}
elseif ('new_account' == $uri[0]) {
    (new ClientController)->new_account();
}
elseif ('store' == $uri[0]) {
    (new ClientController)->store(); //  issaugome nauja sasaita i musu aplikacija
}
elseif ('add_money' == $uri[0]) {
    (new ClientController)->add_money((int)$uri[1]);
}
elseif ('delete' == $uri[0]) {
    (new ClientController)->delete((int)$uri[1]);
}
elseif ('deduct_money' == $uri[0]) {
    (new ClientController)->deduct_money((int)$uri[1]);
}

echo 'durys';
?>