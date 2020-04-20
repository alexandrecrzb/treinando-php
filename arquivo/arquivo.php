<?php

class Arquivo
{
    protected $handle;

    public function __construct($arquivo)
    {
        $this->handle = fopen($arquivo, 'w+');
    }

    public function escreve($texto)
    {
        fwrite($this->handle, $texto);
    }

    public function __destruct()
    {
        fclose($this->handle);
        echo 'Arquivo fechado';
    }
}