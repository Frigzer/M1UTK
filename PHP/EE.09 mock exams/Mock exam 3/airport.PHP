<?php
    $nazwa='ciasteczko';
    $wartosc='moje_ciasteczko';
    setcookie($nazwa, $wartosc, $expires=time()+3600);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <section id="baner1">
        <h2>Odloty z lotniska</h2>
    </section>
    <section id="baner2">
        <img src="zad6.png" alt="logotyp">
    </section>
    <section id="glowny">
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th>
            </tr>
            <?php
                $c = new mysqli("localhost", "root", "", "egzamin");
                $r = $c->query("SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;");
                while(($tab=$r->fetch_assoc())!=null)
                {
                    print("<tr><td>".$tab['id']."</td><td>".$tab['nr_rejsu']."</td><td>".$tab['czas']."</td><td>".$tab['kierunek']."</td><td>".$tab['status_lotu']."</td></tr>");
                }
                $c -> close();
            ?>
        </table>
    </section>
    <section id="stopka1">
        <a href="kw1.jpg">Pobierz obraz</a>
    </section>
    <section id="stopka2">
        <?php
            if(!isset($_COOKIE[$nazwa]))
            {
                print('<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>');
            }
            else
            {
                print('<p><b>Miło nam, że nas znowu odwiedziłeś</p></b>');
            }
        ?>
    </section>
    <section id="stopka3">
        Autor: PESEL
    </section>
</body>
</html>