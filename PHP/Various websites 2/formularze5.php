<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fromularze</title>
    <style type="text/css">
        form{width:50%; margin:auto; text-align:center;}
        input {padding:.5rem; margin:1rem;}
    </style>
</head>
<body>
    <?php
        if(!isset($_GET['n']))
        {
            print('
                <form method="get" action='.$_SERVER['PHP_SELF'].'>
                    <fieldset>
                        <legend>WYBIERZ LICZBĘ Z KTÓREJ OBLICZYSZ SILNIĘ</legend>
                        <br>n:<input type="number" name="n">
                        <br><input type="submit" value="WYŚLIJ">
                        <input type="reset" value="WYCZYŚĆ">
                    </fieldset>
                </form>
            ');
        }
        elseif($_GET['n']>=0)
        {
            $n = $_GET['n'];
            $silnia = 1;
            for ($i=1; $i<=$n; $i++) 
            {
                $silnia *= $i;
            }
            print ($n.'! = '.$silnia);
        }
        else
        {
            print('Błąd');
        }
    ?>
</body>
</html>