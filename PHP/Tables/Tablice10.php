<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=['Ania', 'Frania', 'Henia', 'Bronia','Czesia','Tomasz','Jonasz'];


        print_r($tab_1);
        print('<br>');
        asort($tab_1);

        print_r($tab_1);
    ?>
</body>
</html>