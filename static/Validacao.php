<?php

class Validacao
{
    public static $tipo = 'Valor statico <br>';
    public static function validaEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function verdadeiro($bool)
    {
        if ($bool === true) {
            return true;
        } 
        return false;
    }

    public static function getTipo()
    {
        return static::$tipo;
    }
}