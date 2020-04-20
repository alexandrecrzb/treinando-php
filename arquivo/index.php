<?php

require_once 'arquivo.php';

$file = new Arquivo('teste.txt');
$file->escreve('Hello World');