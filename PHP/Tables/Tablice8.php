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
            'https://www.manutd.com/en'=>'<img src="1.png">',
            'https://www.liverpoolfc.com/'=>'<img src="2.png">',
            'https://www.chelseafc.com/en'=>'<img src="3.png">',
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