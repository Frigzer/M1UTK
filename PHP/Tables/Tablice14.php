<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab=array();
        for($i=0; $i<rand(5, 55); $i++)
        {
            array_push($tab, rand(10, 100));
        }
        print('Wygenerowana tablica elementów: ');
        foreach($tab as $key=>$value)
        {
            print($value.', ');
        }
        sort($tab);

        print('<br>Wysortowana tablica elementów: ');
        foreach($tab as $key=>$value)
        {
            print($value.', ');
        }
        print('<br>Średnia arytmetyczna z tablicy, to: ');
        $suma=0;
        for ($i=0; $i<count($tab); $i++)
        {
            $suma+=$tab[$i];
        }
        print(number_format($suma/count($tab),2).'.');
        print('<br>Średnia geometryczna z tablicy, to: ');
        $iloczyn=1;
        for ($i=0; $i<count($tab); $i++)
        {
            $iloczyn*=$tab[$i];
        }
        print(number_format(pow($iloczyn,1/count($tab)),2).'.');
    ?>
</body>
</html>