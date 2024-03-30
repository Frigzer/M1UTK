<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Moduł mysqli</title>
</head>
<body>
    <?php
        $c= @new mysqli("localhost","root","","manchester_united");
        $r=$c->query("SELECT imie, nazwisko, pozycja.pozycja FROM pilkarze join pozycja on pilkarze.pozycja=pozycja.id_pozycja");
        while(($tab=$r->fetch_assoc())!=null)
        {
            print($tab['imie']." ".$tab['nazwisko']." ".$tab['pozycja'].'<br>');
        }
    ?>
</body>
</html>