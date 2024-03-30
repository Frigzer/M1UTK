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
            //print('Połączono z bazą manchester united');
            $r=$c->query("SELECT imie, nazwisko, pozycja.pozycja FROM pilkarze join pozycja on pilkarze.pozycja=pozycja.id_pozycja");
            if($r==false)
            {
                print('Błąd zapytania !!!');
            }
            else
            {
                print('<table>');
                print('<tr><th>Imię</th><th>Nazwisko</th><th>Pozycja</th></tr>');
                while(($tab=$r->fetch_assoc())!=null)
                {
                    print('<tr><td>'.$tab['imie']."</td><td>".$tab['nazwisko']."</td><td>".$tab['pozycja'].'</td></tr>');
                }
                print('</table>');
                $r ->close();
                $c ->close();
            }

        }
    ?>
</body>
</html>