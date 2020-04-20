<?php

class Cliente
{
    public $nome;
    protected $email;
    private $info = ' <br> ClienteBase';

    public function getEmail()
    {
        // $this->teste();
        return $this->email;
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
            return true;
        }
        exit ('Email é inválido');
    }

    protected function teste()
    {
        echo $this->info;
        echo '<br>';
    }

    public function getInfo()
    {
        return $this->info;
    }
    
    public function setInfo($info)
    {
        return $this->info = $info;
    }
}