<?php

class Fornecedor extends Pessoa
{
    public $cnpj;

    public function exibir()
    {
        echo 'Fornecedor <br>';
        parent::exibir();
        echo 'CNPJ : ' . $this->cnpj . '<br>';
    }
}