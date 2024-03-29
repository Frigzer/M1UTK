<?php setcookie ('nazwa', 'Bonifacy', time()+30); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['nazwa']))
        {
            print('<br>Nazwa ciasteczka: <b>'.$_COOKIE['nazwa'].'</b>.');
        }
    ?>
</body>
</html>