<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
    <style type='text/css'>
        ul {width:40%; padding:0; font:100%/1.5 arial;}
        ul li{list-style-type:none; margin-bottom:.5rem;}
        


    </style>
</head>
<body>
    <!--
    <u1>
        <li><a href="#">ELEMENT LISTY NR 1</a></li>
        <li><a href="#">ELEMENT LISTY NR 2</a></li>
        <li><a href="#">ELEMENT LISTY NR 3</a></li>
    </u1>
    -->
    <?php
        $tab=
        [
            'https://www.wp.pl'=>'WIRTUALNA POLSKA',
            'https://www.onet.pl'=>'ONET',
            'https://www.interia.pl'=>'INTERIA',
        ];
        print('<ul>');
        foreach($tab as $k=>$v)
        {
            print('<li><a href="'.$k.'">'.$v.'</a></li>');
        }
        print('</ul>');
    ?>
</body>
</html>