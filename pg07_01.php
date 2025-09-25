<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pg07_01</title>
</head>
<body>
<h1>Pg07_01 - 18/07/25</h1>

<h2>Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição:".($a + $b);
    echo "<br>Subtração:".($a - $b);
    echo "<br>Multiplicação:".($a * $b);
    echo "<br>Divisão:".($a / $b);
    echo "<br>Módulo:".($a % $b);
    echo "<br>Exponenciação:".($a ** $b);
    ?>
<hr>
<h2>Atribuição</h2>
    <?php
    $a=10;//a = 10
    $b=2;// b = 2
    $a+=$b;// a + b; a = 12
    $b-=5;// b - 5; b = -3
    echo "a = ".$a;// a = 12
    echo "<br>b = ".$b;// b = -3
    $c=11;//c = 11
    $d=6;//d = 6
    $c%=$d;//11 % 6; c = 5
    $d+=$a;//d + a; d = 18 
    echo "<br>c = ".$c;//c = 5
    echo "<br>d = ".$d;//d = 18
    ?>
<hr>
<h2>String</h2>
    <?php
    $a = "Maria ";
    echo "$a <br>";//Maria
    $b = "Leopoldina ";
    echo "$b <br>";//Leopoldina
    echo $a . $b;//Maria Leopoldina 
    $b .= $a;
    echo "<br>$b";//Leopoldina Maria
    $b .= "cruz";
    echo "<br>$b";//Leopoldina Maria Cruz
    ?>
<hr>
<h2>Incremento/Decremento</h2>
    <?php
    $x = 100;
    echo "x = ".++$x;//101
    echo "<br>x final = ".$x;//101
    echo "<hr>";
    $i=10;
    echo "<br> i = $i";//i = 10
    /*
    $i++;//11
    $i++;//12
    ++$i;//13
    ++$i;//14
    */
    $i +=4;//14
    echo "<br> i = $i";// i = 14
    $i--;//13
    $i--;//12
    --$i;//11
    echo "<br> i = $i";// i = 11
    ?>
</body>
</html>