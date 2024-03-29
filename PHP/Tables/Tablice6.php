<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=['i_1'=>'Ania', 'i_2'=>'Frania', 'i_3'=>'Henia', 'i_4'=>'Bronia', 'i_5'=>'Czesia'];

        $index=key($tab_1);
        $value=current($tab_1);
        print('['.$index.']=>'.$value.'<br>');

        next($tab_1);

        $index=key($tab_1);
        $value=current($tab_1);
        print('['.$index.']=>'.$value.'<br>');

        print('<pre>');
        print_r($tab_1);
        print('</pre>');

        print('<pre>');
        var_export($tab_1);
        print('</pre>');

        print('<pre>');
        var_dump($tab_1);
        print('</pre>');

        print('<pre>');
        foreach($tab_1 as $k=>$v)
        {
            print('['.$k.']=>'.$v.'<br>');
        }
        print('</pre>');
    ?>
</body>
</html>