<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
        function wypisz($ile, $ciag)
        {
            for ($i=1; $i<=$ile; $i++)
            {
                print($i.') '.$ciag.'<br>');
            }
        }

        print('<b>Pierwsze wywołanie funkcji:</b><br>');
        wypisz(5,'Ala ma kota');

        print('<br><b>Drugie wywołanie funkcji:</b><br>');
        $ciag_znakow='Kaczor Daffy to super gość...';
        wypisz(12,$ciag_znakow);

        print('<br><b>Trzecie wywołanie funkcji:</b><br>');
        $lp=13;
        $ciag_znakow='Daffy jest chytry opryskiliwy, a zarazem inteligentny i przebiegły.';
        wypisz($lp,$ciag_znakow);
    ?>
</body>
</html>