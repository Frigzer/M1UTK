<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function iloczyn()
       {
           static $l=1;
           print('Funkcję wywołano <b>'.$l.'</b> razy !<br>');
           $l++;
       }
       function ile($n)
       {
           for ($i=1; $i<=$n; $i++)
           {
               iloczyn();
           }
       }
       ile(13);

       print('Funkcję wywołano <b>'.$l.'</b> razy !<br>');
    ?>
</body>
</html>