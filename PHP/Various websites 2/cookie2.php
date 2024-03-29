<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['admin']))
        {
            print('<br>Ustawiono ciasteczko: <b>'.$_COOKIE['admin'].'</b>.<br>');
            print('Usuwanie ciasteczka...');
            setcookie('admin', '4rfv5tgb', time()-30);
        }
        else
        {
            print('Tworzenie nowego ciasteczka...');
            setcookie('admin', '4rfv5tgb', time()+30);
        }
    ?>
</body>
</html>