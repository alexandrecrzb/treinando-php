<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3308;dbname=php-intermediario',
    'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_OBJ
    ]);

    if (isset($_GET["id"])) {
        $id = $_GET['id'];
    }

    $stmt = $pdo->prepare('SELECT * FROM funcionarios WHERE id=:id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $funcs = $stmt->fetchAll();
    var_dump($funcs);



} catch (PDOexception $ex) {
    echo $ex->getMessage();
}