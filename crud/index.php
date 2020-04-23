<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3308;dbname=php-intermediario',
    'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_OBJ
    ]);

    // $qtd = $pdo->exec("
    //     INSERT INTO funcionarios
    //     (nome, email, endereco, telefone)
    //     VALUES
    //     ('Percival Pereira', 'ppereira@email.com', 'R. Atalaia do leste, 500', '12 3445-4567')
    // ");

    // $qtd = $pdo->exec("
    //     UPDATE funcionarios
    //     SET telefone = '11 3233-9876'
    //     WHERE id = '5' 
    // ");

    $qtd = $pdo->exec("
        DELETE FROM funcionarios
        WHERE id = '4'
    ");

    echo "$qtd Registro(s) afetado(s)";

    $stmt = $pdo->query('SELECT * FROM funcionarios');
    $funcs = $stmt->fetchAll();
    var_dump($funcs);



} catch (PDOexception $ex) {
    echo $ex->getMessage();
}