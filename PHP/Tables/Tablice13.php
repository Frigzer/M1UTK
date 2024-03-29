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

        print('<pre>');
        print('Wartość losowa z tablicy tab_1, to: '.$tab_1[rand(0, count($tab_1)-1)].'.');
        print('</pre>');
    ?>
</body>
</html>