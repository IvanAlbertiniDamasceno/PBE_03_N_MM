<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa_pg02_02</title>
</head>
<body>
    <h1>Casa_pg02_02</h1>
    <?php
    $numero = $_POST ["numero"];
    $result = $numero % 2;
    $resposta = ($result == 0) ? "Par" : "Ímpar;
    echo "O número $numero é $resposta";

    ?>
</body>
</html>