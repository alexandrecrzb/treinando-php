<?php
$nome = "Nome";
$dados = [
    'nome' => 'Alexandre',
    'email' => 'alexandre@pixeltrine.com',
    'fone' => '85 99999-9999',
    'site' => 'http://www.pixeltrine.com'
];

//variaveis do extract com o prefixo no terceiro parametro
extract($dados, EXTR_PREFIX_ALL, 'extr');
echo "$nome:<br>";
echo "$extr_nome <br>";
echo "$extr_email <br>";
echo "$extr_fone <br>";
echo "$extr_site <br>";