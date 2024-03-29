<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       $postac='prosiak Porky';
       function wypisz()
       {
           print('Przyjacielem kaczora <b>Daffyego</b> jest <b>'.$GLOBALS['postac'].'</b>.');
       }
       wypisz();
       print('<br>Wrogiem kaczora <i>Daffyego</i> jest <i>'.$postac.'</i>.');
    ?>
</body>
</html>