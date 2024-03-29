<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=['Fiat', 'Volvo', 'Syrenka', 'BMW', 'Jaguar'];

        print('<pre>');
        print_r($tab_1);
        print('</pre>');

        //array_unshift($tab_1, 'Audi', 'Mustang');
        //array_push($tab_1, 'Audi', 'Mustang');
        //array_pop($tab_1');

        unset($tab_1[0], $tab_1[count($tab_1)]);

        print('<pre>');
        print_r($tab_1);
        print('</pre>');
       
    ?>
</body>
</html>