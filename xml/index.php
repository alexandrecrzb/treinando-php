<?php

$alunos = [
    [
        'id' => 1,
        'nome' => 'Pedro',
        'cidade' => 'São Paulo'
    ],

    [
        'id' => 2,
        'nome' => 'Ana',
        'cidade' => 'São Paulo'
    ],

    [
        'id' => 3,
        'nome' => 'Carla',
        'cidade' => 'Curitiba'
    ],

    [
        'id' => 4,
        'nome' => 'Marcos',
        'cidade' => 'Recife'
    ]

];

$dom = new DOMDocument('1.0', 'UTF-8');
$tag = $dom->createElement('tag');

foreach ($alunos as $aluno){
    settype($aluno, 'object');
    $alunotag = $dom->createElement('aluno');
    $alunotag->setAttribute('id', $aluno->id);
    $alunotag->appendChild($dom->createElement(
        'nome', $aluno->nome));
        $alunotag->appendChild($dom->createElement(
        'cidade', $aluno->cidade));
    $tag->appendChild($alunotag);
}

$dom->appendChild($tag);
$dom->formatOutput = true;
//echo $dom->saveXML();
$dom->save('alunos.xml');