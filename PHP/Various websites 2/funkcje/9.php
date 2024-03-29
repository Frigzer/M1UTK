<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
</head>
<body>
    <?php
       function funkcja($postac='prosiaczek Porky')
       {
           return $postac;
       }
       print('Moją ulubioną postacią z kreskówek jest: <b>'.funkcja().'</b>.<br>');
       print('Marcin uwielbia <u>'.funkcja('kaczora Daffyego').',</u>');
       $hero='speedyego Gonzaleza';
       print('a Patryk jest fanem <i>'.funkcja($hero).'</i>');
    ?>
</body>
</html>