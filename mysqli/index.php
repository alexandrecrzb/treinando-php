<?php



$con = mysqli_connect("localhost:3308","root","","php-intermediario");

// Check connection
if (mysqli_connect_errno()) {
  echo "Falha ao conectar no MySQL: " . mysqli_connect_error();
  exit();
}

$res = $con->query('SELECT * FROM funcionarios');

if($con->errno){
    exit(utf8_encode($con->error));
}

// while ($func = $res->fetch_object()) {
//     echo $func->nome . '<br>';
// }
// while ($func = $res->fetch_array()) {
//     echo $func['nome'] . '<br>';
// }
// while ($func = $res->fetch_assoc()) {
//     echo $func['nome'] . '<br>';
// }

//informações sobre as colunas do select
// var_dump($res->fetch_fields());

// Resgata todos os dados sem precisar do while
// $funcs = $res->fetch_all();
// var_dump($funcs);

echo $res->num_rows;