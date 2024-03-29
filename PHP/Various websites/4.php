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

        $z1=$z2++;  //$z1=$z2, $z2=$z2+1
        print('Zmienne $z1='.$z1.', $z2='.$z2.'.<br>');

        $z2=--$z1;  //$z1=$z1-1, $z2=$z1
        print('Zmienne $z1='.$z1.', $z2='.$z2.'.<br>');

        $z1=++$z2;  //$z2=$z2+1, $z1=$z2
        print('Zmienne $z1='.$z1.', $z2='.$z2.'.<br>');

        $z2=$z1--;  //$z2=$z1, $z1=$z1-1
        print('Zmienne $z1='.$z1.', $z2='.$z2.'.<br>');

    ?>
</body>
</html>