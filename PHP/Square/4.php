<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funkcje</title>
    <style type="text/css">
        form{width:50%; margin:auto; text-align:center;}
        input {padding:.5rem; margin:1rem;}
    </style>
</head>
<body>
    <?php
        if(!isset($_GET['w']))
        {
            print('
                <form method="get" action='.$_SERVER['PHP_SELF'].'>
                    <fieldset>
                        <legend>PODAJ WARTOŚĆ</legend>
                        <br>wartość:<input type="number" name="w">
                        <br><input type="submit" value="WYŚLIJ">
                        <input type="reset" value="WYCZYŚĆ">
                    </fieldset>
                </form>
            ');
        }
        else($_GET['w']<=1)
        {
            print('Podaj wartośc dodatnią');
        }
        else
        {
            function suma($wartosc)
            {
                $suma=0;
                for($i=0; $i<=$_GET['w']; $i++)
                {
                    $suma+=$i;
                }
                return $suma;
            }

        print('Suma wynosi: '.suma($_GET['w']));
        }
    ?>
</body>
</html>