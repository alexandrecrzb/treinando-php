<?php

$nome = "Alexandre";

//HEREDOC
$heredoc = <<<MEUTEXTO
$nome: Meu texto aqui sem ter conflito 
com aspas simples " ' " ou
aspas duplas " " " <br>
MEUTEXTO;

//NOWDOC não aceita variaveis externas
$nowdoc = <<<'NOVOTEXTO'
$var; Contrary to popular belief, 
Lorem Ipsum is not simply 
random text.
NOVOTEXTO;

echo $heredoc;
echo $nowdoc;
