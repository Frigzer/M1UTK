<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        print('------------------- Tablica o różnych typach elementów -------------------');
        $tab_1=array();
        $tab_1[1]='Ania';
        $tab_1[2]=23;
        $tab_1[3]=['Jan', 'Nowak', 'ul. Szkolna 98', '23-400 Biłgoraj'];

        print('<pre>');
        print_r($tab_1);
        print('</pre>');

        print('------------------- Tablica o różnych typach indeksów -------------------');
        $tab_2[1]='Ania';
        $tab_2['wiek']=23;
        $tab_2[3]='Aleksander';

        print('<pre>');
        var_dump($tab_2);
        print('</pre>');
    ?>
</body>
</html>