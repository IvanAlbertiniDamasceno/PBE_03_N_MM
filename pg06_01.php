<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pg06_01</title>
</head>
<body>
    <h1>Pg06_01 - 11/09/25</h1>
    <!-- method = "get" é um método inseguro -->
     <!-- method = "post" é um método seguro -->
    <form method="post" action="pg06_02.php">
        Login <input type = "text" name= "login"><br> 
        Senha <input type = "password" name = "senha"><br>
        <input type = "submit" value = "Enviar"><br> 
    </form>
    <?php

    ?>
</body>
</html>