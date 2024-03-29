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
        $z3=7;

        print('Zmienne: $z1='.$z1.', $z2='.$z2.', $z3='.$z3.'.<br>');

        $wynik_1=($z1<$z2)||($z2>=$z3)?('prawda'):('fałsz');    //OR
        print('($z1<=$z2)||($z2>=$z3)= '.$wynik_1.'.<br>');

        $wynik_2=($z1>=$z2)&&($z2<=$z3)?('prawda'):('fałsz');   //AND
        print('($z1>=$z2)&&($z2<=$z3)= '.$wynik_2.'.<br>');

        $wynik_3=!($z1>=$z2)?('prawda'):('fałsz');  //NOT
        print('!($z1>=$z2)= '.$wynik_3.'.<br>');

        

    ?>
</body>
</html>