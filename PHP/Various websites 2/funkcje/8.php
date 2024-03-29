<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function kwadrat(&$l)
       {
           $l=$l*$l;
       }
       $liczba=3;
       print('Wartość zmiennej <b>$liczba</b> przed wywołaniem funkcji wynosi: <b>');
       print($liczba.'</b>.<br>');
       kwadrat($liczba);
       print('Wartość zmiennej <b>$liczba</b> po wywołaniu funkcji wynosi: <b>');
       print($liczba.'</b>.');
    ?>
</body>
</html>