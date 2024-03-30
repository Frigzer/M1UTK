<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="logo">
        <img src="wzor.png" alt="wzór BMI">
    </section>
    <section id="baner">
        <h1>Oblicz swoje BMI</h1>
    </section>
    <section id="main">
        <table>
            <tr>
                <th>Interpretacja BMI</th><th>Wartość minimalna</th><th>Wartość maksymalna</th>
            </tr>
            <?php
                $c = @new mysqli("localhost", "root", "", "egzamin");
                $r = $c -> query('SELECT informacja, wart_min, wart_max FROM bmi;');
                while(($tab=$r->fetch_assoc())!=null)
                {
                    print('<tr><td>'.$tab['informacja'].'</td><td>'.$tab['wart_min'].'</td><td>'.$tab['wart_max'].'</td></tr>');
                }
            ?>
        </table>
    </section>
    <section id="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form action="bmi.php" method="POST">
            Waga <input type="number" min="1" name="waga"><br>
            Wzrost w cm <input type="number" min="1" name="wzrost"><br>
            <input type="submit" value="Oblicz i zapamiętaj wynik">
        </form>
        <?php
            if(isset($_POST['waga']) && isset($_POST['wzrost']))
            {
                $waga=$_POST['waga'];
                $wzrost=$_POST['wzrost'];
                $bmi=($waga/($wzrost*$wzrost))*10000;
                print('Towja waga: '.$waga.'; Twój wzrost: '.$wzrost);
                print('<br>BMI wynosi: '.$bmi);
                if($bmi<=18)
                {
                    $id='1';
                }
                elseif($bmi>=19 && $bmi<=25)
                {
                    $id='2';
                }
                elseif($bmi>=26 && $bmi<=30)
                {
                    $id='3';
                }
                elseif($bmi>=31 && $bmi<=100)
                {
                    $id='4';
                }
                $p = @new mysqli("localhost", "root", "", "egzamin");
                $w = $p -> query('INSERT INTO wynik(bmi_id, data_pomiaru, wynik) VALUES (\''.$id.'\',\''.date("Y-m-d").'\',\''.$bmi.'\');');
            }
        ?>
    </section>
    <section id="prawy">
        <img src="rys1.png" alt="ćwiczenia">
    </section>
    <section id="stopka">
        Autor: PESEL
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </section>
</body>
</html>