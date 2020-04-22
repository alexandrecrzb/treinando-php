<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros PHP</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
        // $texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);
        $texto = $_POST['texto'];
        
        // valida float
        // $float = ['decimal' => ','];
        // if (filter_var($texto, FILTER_VALIDATE_FLOAT, ['options' => $float])) {
        //     echo 'Float válido';
        // }

        // Valida email
        // if (filter_var($texto, FILTER_VALIDATE_EMAIL)) {
        //     echo 'Email válido';
        // }
        
        $int = [
            'min_range' => -150,
            'max_range' => 300
        ];
        if (filter_var($texto, FILTER_VALIDATE_INT, ['options' => $int])) {
            echo 'Número válido entre -150 até 300';
        }
    }
    ?>
    <br>
        <form method="POST">
            texto: <input type="text" value="<?=$texto?>" name="texto">
            <button>Enviar</button>
        </form>

</body>
</html>