<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $tablica=array(
            'u1'=>['Jan','Nowak','33 lata'],
            'u45'=>['Hieronim','Zamaszysty','19 lat'],
            'u19'=>['Czesław','Bell','45 lat']
        );
        ksort($tablica);
        print('<pre>');
        foreach($tablica as $k=>$e)
        {
            for($i=0;$i<count($tablica);$i++)
            {
                print($tablica[$k][$i].' ');
            }
            print('<br>');
        }
        print('</pre>');
    ?>
</body>
</html>