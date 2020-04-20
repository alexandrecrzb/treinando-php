<?php

require_once 'pessoa.php';
require_once 'cliente.php';
require_once 'fornecedor.php';

$cli = new Cliente();
$cli->codigo = 12;
$cli->nome = 'Alexadre';
$cli->email = 'alexandre@email.com';
$cli->cpf = '987.075.073-65';

$cli->exibir();

$forn = new Fornecedor();
$forn->codigo = '123';
$forn->nome = 'Microsoft';
$forn->email = 'contato@microsoft.com';
$forn->cnpj = '57.413.537/0001-09';

$forn->exibir();