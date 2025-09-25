<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pg08_01</title>
</head>
<body>
<h1>Pg08_01 - 25/09/25</h1>
<h2>Comparação</h2>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>";//true 
    echo "Idêntico = ".($a===$b)."<br>";//false
    echo "Não igual = ".($a!=$b)."<br>";//false
    echo "Não Idêntico = ".($a!==$b)."<br>";//true
    ?>
    <?php
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";//false
    echo "Menor ou igual: ".($a<=$b)."<br>";//true
    echo "Maior: ".($c>$b)."<br>";//true
    echo "Maior ou igual: ".($c>=$b)."<br>";//true
    /*
    = atribui/recebe
    == iguais
    === idêntico
    */
    ?>
<hr>
<h2>Lógicos</h2>
    <?php
    $a=50;
    $b=120;
    $c= ($a<=$b);//true
    $d= !($a<=$b);//false
    var_dump($c);
    echo "<br>";
    var_dump($d);
    ?>
    <hr>
    <?php
    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) and ($a<=$c));//true
    $e=(($a<=$b) &&  ($a>=$c));//false
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>
    <hr>
    <?php
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));//false
$e=(($a>=$b) || ($a<=$c));//true
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));//true
$e=(($a>=$b) xor ($a>=$c));//false
var_dump($d);
echo "<br>";
var_dump($e);
?>
<hr>
<h2>Operador ternário</h2>
<?php
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>
</body>
</html>