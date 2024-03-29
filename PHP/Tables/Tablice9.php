<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
    <style type='text/css'>
        ul {width:40%; padding:0;}
        ul li{ margin-bottom:.5rem;}
        img {width:30%;}

    </style>
</head>
<body>
    <?php
        $tab_1=
        [
            array('Jan','Nowak'),
            array('Franciszek','Dolas'),
            array('Hieronim','Zamaszysty')
        ];

        /*
        print('<pre>');
        print_r($tab_1);
        var_dump($tab_1);
        var_export($tab_1);
        print('</pre>');
        */

        for ($i=0; $i<count($tab_1); $i++)
        {
                foreach($tab_1[$i] as $k=>$v)
            {
                print('['.$i.']'.'['.$k.']=>'.$v.'<br>');
            }
        }
    ?>
</body>
</html>