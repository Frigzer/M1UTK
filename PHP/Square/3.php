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
        if(!isset($_GET['p']) || !isset($_GET['w']))
        {
            print('
                <form method="get" action='.$_SERVER['PHP_SELF'].'>
                    <fieldset>
                        <legend>PODAJ PODSTAWE I WYKŁADNIK</legend>
                        <br>podstawa:<input type="number" name="p">
                        wykładnik:<input type="number" name="w">
                        <br><input type="submit" value="WYŚLIJ">
                        <input type="reset" value="WYCZYŚĆ">
                    </fieldset>
                </form>
            ');
        }
        elseif($_GET['w']<0)
        {
            print('Błąd!!!');
        }
        else
        {
            function potega($podstawa, $wykladnik)
            {
                if ($wykladnik==0)
                {
                    return 1;
                }
                else
                {
                    return potega($podstawa, $wykladnik-1)*$podstawa;
                }
            }

        print('<b>'.$_GET['p'].'<sup>'.$_GET['w'].'</sup></b> = <b><i>'.potega($_GET['p'],$_GET['w']).'</i></b>');
        }
    ?>
</body>
</html>