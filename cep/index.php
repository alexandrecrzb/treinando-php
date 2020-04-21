<?php

$cep = $_GET['cep'];

$xml = file_get_contents("http://api.postmon.com.br/v1/cep/$cep?format=xml");
$enedeco = new SimpleXMLElement($xml);

//parametros colocar ?cep=60150190 no fim da url

echo 'Logradouro: ' . $enedeco->logradouro;
echo '<br>Bairro: ' . $enedeco->bairro;
echo '<br>Cidade: ' . $enedeco->cidade;
echo '<br>Estado: ' . $enedeco->estado;