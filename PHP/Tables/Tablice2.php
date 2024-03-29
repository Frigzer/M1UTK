<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        print('------------------- Inicjalizacja tablicy o domyślnym indeksie -------------------');
        $tab_1[]='Ania';
        $tab_1[]='Frania';
        $tab_1[]='Hania';

        print('<pre>');
        var_export($tab_1,false);
        print('</pre>');

        print('------------------- Inicjalizacja tablicy o jawnie podanym indeksie -------------------');
        $tab_2[6]='Andrzej';
        $tab_2[9]='Franciszek';
        $tab_2[1111]='Józef';

        print('<pre>');
        var_export($tab_2,false);
        print('</pre>');

        print('------------------- Inicjalizacja tablicy z wykorzystaniem kunstrukcji array() -------------------');
        $tab_3=array(2,45,78,32,90);

        print('<pre>');
        var_export($tab_3,false);
        print('</pre>');

        print('------------------- Inicjalizacja tablicy z wykorzystaniem kunstrukcji array() i indeksem startowym -------------------');
        $tab_4=array(2,6=>45,78,32,90);

        print('<pre>');
        var_export($tab_4,false);
        print('</pre>');

        print('------------------- Inicjalizacja tablicy asocjacji -------------------');
        $tab_5=array('i_0'=>2,'i_1'=>45,'i_2'=>78,'i_3'=>32,'i_4'=>90);

        print('<pre>');
        var_export($tab_5,false);
        print('</pre>');

        print('------------------- Inicjalizacja tablicy z wykorzystaniem kunstrukcji [ ] -------------------');
        $tab_6=[34,56,78,43,21,78,90];

        print('<pre>');
        var_export($tab_6,false);
        print('</pre>');
    ?>
</body>
</html>