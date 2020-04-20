<?php

class Inimigo extends Ator
{

    protected function setVida()
    {
        $this->vida = 300;
    }

    public function bater()
    {
        echo 'Inimigo bate no jogador!';
    }
}