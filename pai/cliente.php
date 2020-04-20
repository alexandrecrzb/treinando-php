<?php

class Cliente extends Pessoa
{
   public $cpf;
   
   public function exibir()
   {
       echo 'Cliente <br>';
        parent::exibir();
       echo 'CPF : ' . $this->cpf . '<br>';
   }
}