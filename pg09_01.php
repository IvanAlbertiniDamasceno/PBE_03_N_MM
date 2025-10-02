<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pg09_01</title>
</head>
<body>
    <h1>Pg09_01 - 02/10/25</h1>

    <?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else{
    echo "Você é menor de idade.";
}
echo "<hr>";

$hora = 11;

if ($hora >= 0 && $hora < 12) {
    echo "Bom dia!";
} elseif ($hora > 12 && $hora < 18) {
    echo "Boa tarde!";
} elseif($hora <= 23) {
    echo "Boa noite!";
}
else {
    echo "Hora inválida!";
}
echo "<hr>";


$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;
echo "<hr>";

$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo "<hr>";
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/Y H:i:s");
 "Dia da semana: " . date('l');
echo "<hr>";
 echo md5("uninove");
?>

</body>
</html>