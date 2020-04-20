<?php

require_once 'cliente.php';
require_once 'clientepf.php';

$cli = new cliente();

$cli->nome = 'Alexandre';
$cli->setEmail('alexandre@email.com');

echo $cli->getEmail();

$pf = new ClientePF;

$pf->teste2();

// var_dump($cli);
