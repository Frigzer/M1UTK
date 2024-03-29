<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $z1=11;
        $z2=4;
        $z3=0;

        print('ZmienneL $z1='.$z1.', $z2='.$z2.',$z3='.$z3.'<br>');

        $suma=$z1|$z2;
        print('Suma bitowa (OR) zmiennych $z1 i $z2 wynosi: '.$suma.'.<br>');

        $roznica=$z1^$z2;
        print('Różnica bitowa (NOR) zmiennych $z1 i $z2 wynosi: '.$roznica.'.<br>');

        $iloczyn=$z1&$z2;
        print('Iloczyn bitowy (AND) zmiennych $z1 i $z2 wynosi: '.$iloczyn.'.<br>');

        $negacja=!$z3;
        print('Negacja bitowa (NOT) zmiennej $z3 wynosi: '.$negacja.'.<br>');

        $w_lewo=$z1<<2;
        print('Przesunięcie bitowe zmiennej $z1 w lewo o dwie pozycje wynosi: '.$w_lewo.'.<br>');

        $w_prawo=$z1>>2;
        print('Przesunięcie bitowe zmiennej $z2 w prawo o dwie pozycje wynosi: '.$w_prawo.'.');
    ?>
</body>
</html>