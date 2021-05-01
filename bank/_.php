<?php


$users = [
    ['name' => 'Antanas', 'psw' => md5('123')],
    ['name' => 'Ona', 'psw' => md5('12')],
    ['name' => 'Bebras', 'psw' => md5('1')]
];

file_put_contents(__DIR__.'/users.json', json_encode($users));