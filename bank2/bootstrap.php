<?php
session_start();
define('URL', 'http://localhost/namudarbai/bank2/');
define('INSTALL_DIR','/namudarbai/bank2/');
define('DIR', __DIR__.'/');
require DIR.'app/ClientController.php';
require DIR.'app/Json.php';
require DIR.'app/Client.php';

require DIR.'vendor/autoload.php';

_d($_SESSION);

