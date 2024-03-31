<?php
    setcookie($nazwa='ciasteczko', $wartosc='wartosc_ciasteczka', $czas=time()+(3600*2));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <section id="baner1">
        <img src="zad5.png" alt="logo lotnisko">
    </section>
    <section id="baner2">
        <h1>Przyloty</h1>
    </section>
    <section id="baner3">
        <h3>Przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz</a>
    </section>
    <section id="glowny">
        <table>
            <tr>
                <th>czas</th><th>kierunek</th><th>numer rejsu</th><th>status</th>
            </tr>
            <?php
                $c = new mysqli("localhost", "root", "", "egzamin");
                $r = $c->query("SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas;");
                while(($tab=$r->fetch_assoc())!=null)
                {
                    print("
                        <tr><td>".$tab['czas']."</td><td>".$tab['kierunek']."</td><td>".$tab['nr_rejsu']."</td><td>".$tab['status_lotu']."</td></tr>
                    ");
                }
                $c -> close();
            ?>
        </table>
    </section>
    <section id="stopka1">
        <?php
            if(!isset($_COOKIE['ciasteczko']))
            {
                print('<p><b>Dzień dobry! Strona lostniska używa ciasteczek</b></p>');
            }
            else
            {
                print('<p><i>Witaj ponownie na stronie lostniska</i></p>');
            }
        ?>
    </section>
    <section id="stopka2">
        Autor: PESEL
    </section>
</body>
</html>