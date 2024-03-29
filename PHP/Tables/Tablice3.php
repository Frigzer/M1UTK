<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=[12,45,78,98,431,45,78];

        print('------------------- Przeglądanie tablicy sekwencyjnej z wykorzystaniem pętli for -------------------');
        print('<br>');
        for ($i=0; $i<7; $i++)
        {
            print('['.$i.']=>'.$tab_1[$i].'<br>');
        }
    ?>
</body>
</html>