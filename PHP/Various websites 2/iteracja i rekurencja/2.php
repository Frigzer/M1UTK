<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function silnia($i)
       {
           if ($i==0)
           {
               return 1;
           }
           elseif($i==1)
           {
               return 1;
           }
           else return ($i-1)*$i;
       }

       $liczba=5;

       print('Silnia z <b>'.$liczba.'</b> wynosi: <b>'.silnia($liczba).'</b>.');
    ?>
</body>
</html>