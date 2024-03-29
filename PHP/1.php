<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $z1=123456789;
        var_export($z1);
        print('<br>');
        var_dump($z1);

        print('<br><br>');

        $z2='Ala ma kota, a kot ma wąsy!!!';
        var_export($z2);
        print('<br>');
        var_dump($z2);

        print('<br><br>');

        $z3=array('Ala', 123, 'Frank', 45.78, 'Adrian');

        var_export($z3);
        print('<br>');
        print('<pre>');
        var_export($z3);
        print('</pre>');

        print('<br>');

        var_dump($z3);
        print('<br>');
        print('<pre>');
        var_dump($z3);
        print('</pre>');
    ?>
</body>
</html>