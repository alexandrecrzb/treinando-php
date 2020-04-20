<?php

class Jogador extends Ator
{
    protected function setVida()
    {
        $this->vida = 150;
    }

    public function atirar()
    {
        echo 'Atira no inimigo';
    }
}