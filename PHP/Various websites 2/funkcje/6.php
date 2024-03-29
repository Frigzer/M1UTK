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
           $postac='prosiak Porky';
           print('Przyjacielem kaczora <u>Daffyego</u> jest <u>'.$postac.'</u>.');
       }
       wypisz();
       print('<br>Wrogiem kaczora <strike>Daffyego</strike> jest <strike>'.$postac.'</strike>.');
    ?>
</body>
</html>