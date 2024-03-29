<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
    <style type='text/css'>
        form{width:50%; margin:auto; text-align:center;}
        input {padding:.5rem; margin:1rem;}
    </style>
</head>
<body>
    <?php
        if(!isset($_GET['ile']) && !isset($_GET['ciag']))
        {
            print('
                <form method="get" action='.$_SERVER['PHP_SELF'].'>
                    <fieldset>
                        <legend>PODAJ DŁUGOŚĆ FUNKCJI I CIĄG ZNAKÓW</legend>
                        <br>ile:<input type="number" name="ile">
                        ciąg znaków:<input type="text" name="ciag">
                        <br><input type="submit" value="WYŚLIJ">
                        <input type="reset" value="WYCZYŚĆ">
                    </fieldset>
                </form>
            ');
        }
        elseif(empty($_GET['ile']) || empty($_GET['ciag']) || $_GET['ile']<0 || is_numeric($_GET['ciag']))
        {
            print('Błąd!!!');
        }
        else
        {
            function wypisz($ile, $ciag)
            {
                for ($i=1; $i<=$ile; $i++)
                {
                    print($i.') '.$ciag.'<br>');
                }
            }

            print('<b>Funkcja:</b><br>');
            wypisz($_GET['ile'],$_GET['ciag']);
        }
        
    ?>
</body>
</html>