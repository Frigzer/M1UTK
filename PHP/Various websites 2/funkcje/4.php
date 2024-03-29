<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function dodawanie($l1,$l2)
       {
           $suma=$l1+$l2;
           return $suma;
       }
       
       print('Suma liczb 12.1 i 17.345 wynosi: '.dodawanie(12.1, 17.345).'.');
    ?>
</body>
</html>