<?php

function func1(){
    echo "Função 1 <br>";
}

$minha_str = "func1";
$minha_str();


function func2($par){
    echo "Função 2 com parametro: $par <br>";
}

$minha_str = "func2";

$minha_str('Parametro aqui');
