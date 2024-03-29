<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
        function wypisz()
        {
            for ($i=1; $i<=7; $i++)
            {
                print($i.') Ala ma kota<br>');
            }
        }

        wypisz();
    ?>
</body>
</html>