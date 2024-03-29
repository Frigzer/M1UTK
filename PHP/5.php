<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $z1=11;
        $z2=4;

        print('Zmienne: $z1='.$z1.', $z2='.$z2.'.<br>');

        $wynik_1=($z1==$z2)?('prawda'):('fałsz');
        $typ_1=gettype($z1==$z2);
        print('Wynik porównania zmiennych: '.$wynik_1.' ('.$typ_1.').<br>');

        $wynik_2=($z1!=$z2)?('prawda'):('fałsz');
        $typ_2=gettype($z1!=$z2);
        print('Wynik negacji porównania zmiennych: '.$wynik_2.' ('.$typ_2.').<br>');

    ?>
</body>
</html>