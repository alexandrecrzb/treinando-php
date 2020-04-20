<?php

require_once 'Ator.php';
require_once 'Jogador.php';
require_once 'Inimigo.php';

$jogador = new Jogador();
$jogador->tomarDano();
$jogador->atirar();

var_dump($jogador);

$inimigo = new Inimigo();
$inimigo->tomarDano();
$inimigo->bater();

var_dump($inimigo);