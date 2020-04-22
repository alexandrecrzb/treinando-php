<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3308;dbname=php-intermediario',
    'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_OBJ
    ]);

    $stmt = $pdo->query('SELECT * FROM funcionarios');

    // foreach ($stmt as  $func) {
    //     var_dump($func);        
    // }

    // $funcs = $stmt->fetchAll();
    // var_dump($funcs);

    echo $stmt->rowCount();

} catch (PDOexception $ex) {
    echo $ex->getMessage();
}
