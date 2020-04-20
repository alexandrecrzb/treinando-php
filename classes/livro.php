<?php

class  Livro
{
   public $codigo;
   public $titulo;
   public $autor;
   public $valor;
   
   public function cadastrar()
   {
       echo "Cadastra o livro $this->titulo  no banco de dados";
   }

   public function mostrar_livro()
   {
       echo "Código:  $this->codigo <br>";
       echo "Código:  $this->titulo <br>";
   }
}