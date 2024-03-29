<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=[12=>'Ania', 3478=>'Frania', 56=>'Henia', 3=>'Bronia', 1111=>'Czesia'];

        /*
        $index=key($tab_1);
        $value=current($tab_1);
        print('['.$index.']=>'.$value.'<br>');

        next($tab_1);
        next($tab_1);

        $index=key($tab_1);
        $value=current($tab_1);
        print('['.$index.']=>'.$value.'<br>');

        prev($tab_1);

        $index=key($tab_1);
        $value=current($tab_1);
        print('['.$index.']=>'.$value.'<br>');
        */

        foreach ($tab_1 as $key=>$value)
        {
            print('['.$key.']=>'.$value.'<br>');
        }

        
        
    ?>
</body>
</html>