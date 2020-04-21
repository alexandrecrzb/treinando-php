<?php

require 'Cliente.php';

try {
    $cli = new Cliente;
    $cli->setNome('Alexandre');
    $cli->setEmail('Alexandre@pixeltrine.com');
    
    var_dump($cli);
} catch(ErrorException $er_ex){
    echo 'Fazer algo só para ErroException';
}   catch (\Exception $ex) {
    echo 'Logar erro: '. $ex->getMessage();
}   finally{
    echo '<br>Uma  ação que faz mesmo se der exceção ou não';
}

