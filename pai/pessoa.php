<?php

class Pessoa
{
    public $codigo;
    public $nome;
    public $email;
    public $twitter;

    public function exibir()
    {
        echo 'Código: ' . $this->codigo . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Twitter: ' . $this->twitter . '<br>';
    }
}