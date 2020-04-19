<?php

//trim remove espaços
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$twitter = strtolower (trim($_POST['twitter']));

if(!preg_match('#^[^0-9]{2,80}$#i', $nome)){
    exit('Nome em formato errado');
}

$email_regex = <<<REGEXEMAIL
/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{3})$/
REGEXEMAIL;

if(!preg_match($email_regex, $email)){
    exit('Email invalido');
}

if(!preg_match('/^@[a-z_]{1,15}$/', $twitter)){
    exit('Twitter invalido');
}