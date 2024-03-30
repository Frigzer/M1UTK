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
               $wynik=1;
               for ($i=1; $i<=$wykladnik; $i++)
               {
                   $wynik*=$podstawa;
               }
               return $wynik;
           }
       }

       $w=2;
       $p=3;

       print('<b>'.$p.'<sup>'.$w.'</sup></b> = <b><i>'.pow($p,$w).'</i></b>');
    ?>
</body>
</html>