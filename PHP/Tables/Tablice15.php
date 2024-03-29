<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab=array();
        for($i=0; $i<rand(10, 100); $i++)
        {
            array_push($tab, rand(100, 1000));
        }
        sort($tab);
        print('Wygenerowana tablica elementów: ');
        foreach($tab as $key=>$value)
        {
            print($value.', ');
        }
        print('<br>Wartość najmniejsza: '.min($tab));
    ?>
</body>
</html>