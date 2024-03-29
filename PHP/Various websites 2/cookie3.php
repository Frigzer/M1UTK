<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ciasteczka</title>
    <style type="text/css">
        form {width:50%; margin:auto; text-align:center;}
        input {padding:.4rem 2rem; margin:1rem;}
    </style>
</head>
<body>  
    <?php
        if(!isset($_COOKIE[$_GET['nazwa']]))
        {
            print('Tworzenie nowego ciasteczka: ');
            setcookie($_GET['nazwa'], $_GET['wartosc'], time()+30);
        }
        else
        {
            print('<br>Ustawiono ciasteczko: <b>'.$_COOKIE[$_GET['nazwa']].'</b><br>');
            print('Usuwanie ciasteczka...');
            setcookie($_GET['nazwa'], $_GET['wartosc'], time()-30);
            print('<br><a href="cookie3.html">Wróć do formularza i zmień parametry ciasteczka...</a>');
        }
    ?>
</body>
</html>