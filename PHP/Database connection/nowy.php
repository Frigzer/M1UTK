<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Moduł mysqli</title>
    <style type="text/css">
        table,tr td {
            border:2px solid green;
            text-align:center;
            margin:auto;
            background: black;
            color:white;
        }
        th{
            border:2px solid red;
            color:gold;
        }
        table{
            width:70%;
        }
    </style>
</head>
<body>
    <?php
        $c= @new mysqli("localhost","root","","manchester_united");
        if(mysqli_connect_error()!=0)
        {
            print('Błąd połączenia !!!'.
            mysqli_connect_error().'.');
        }
        else
        {
            $r=$c->query("INSERT INTO pilkarze (imie, nazwisko, pozycja, data_urodzenia)
            VALUES ('Adam', 'Borek', '2', '2002-12-22');");
            if($r==false)
            {
                print('Błąd zapytania !!!');
            }
            else
            {
                print('Dodano użytkownika');
                $c ->close();
            }

        }
    ?>
</body>
</html>