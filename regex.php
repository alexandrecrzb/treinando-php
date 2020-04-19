<?php

$nomes = [
    'Alexandre',
    'Cruz',
    'Barbosa'
];

//Palavra que inicia com A
$filtro = preg_grep('#^A#', $nomes);
var_dump($filtro);

//Palavra que termina
// $filtro = preg_grep('#a$#', $nomes);
// var_dump($filtro);

// $texto = <<<TEXT
// nome: Alexandre <br>
// data_nasc: 12/07/1990 <br>
// data_cad: 20/02/2015 <br>
// TEXT;
// echo $texto;

//pega todas as datas
//preg_match_all('#../../....#', $texto, $match);
// var_dump($match);

//pega tudo que ta na frente de :
// preg_match_all('#(?P<chave>.+): (?P<valor>.+) #', $texto, $match, PREG_SET_ORDER);
// var_dump($match);

// $texto = <<<TEXT
// nome: Alexandre <br>
// data_nasc: 12/07/1990 <br>
// data_cad: 20/02/2015 <br>
// TEXT;

//inverte a data
// $novo_texto = preg_replace_callback('#(\d{2})/(\d{2})/(\d+)#', function($match){
//     return "{match[3]}-{match[2]}-{match[1]} 00:00:00";
// }, $texto);

// echo($novo_texto);