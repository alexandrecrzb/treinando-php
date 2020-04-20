<?php

class Cliente extends Pessoa
{
   public $cpf;
   
   public function exibir()
   {
       echo 'Código: ' . $this->codigo . '<br>';
       echo 'Nome: ' . $this->nome . '<br>';
       echo 'Email: ' . $this->email . '<br>';
       echo 'CPF : ' . $this->cpf . '<br>';
   }
}