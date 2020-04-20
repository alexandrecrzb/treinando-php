<?php

$obj = new stdClass();
$obj->valor1 = 'Valor 1';
$obj->valor2 = 'Valor 2';
$obj->valor3 = 'Valor 3';

var_dump($obj);

$arr_obj = (object) [
    'nome' => 'Alexandre',
    'endereco' => 'Alameda dos anjos',
    'fone' => '85 99999-9999'
];

// $obj2 = (object)$arr_obj;
var_dump($arr_obj);

//propiedade = valor
foreach ($arr_obj as $prop => $val) {
    echo "$prop: $val <br>";
}