<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function potega($podstawa, $wykladnik)
       {
           if ($wykladnik==0)
           {
               return 1;
           }
           else
           {
               return potega($podstawa, $wykladnik-1)*$podstawa;
           }
       }

       $w=2;
       $p=3;

       print('<b>'.$p.'<sup>'.$w.'</sup></b> = <b><i>'.potega($p,$w).'</i></b>');
    ?>
</body>
</html>