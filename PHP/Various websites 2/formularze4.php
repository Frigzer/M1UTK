<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        form{width:50%; margin:auto; text-align:center;}
        input {padding:.5rem; margin:1rem;}
    </style>
</head>
<body>
    <?php
        if(!isset($_GET['lll']))
        {
            print('
                <form method="get" action='.$_SERVER['PHP_SELF'].'>
                    <fieldset>
                        <legend>WYBIERZ LICZBĘ LICZB LOSOWYCH: (od min do max)</legend>
                        <select name="lll">
                            <option value="opis">Wybierz liczbę liczb losowych:</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        <br>min:<input type="number" name="min">
                        <br>max:<input type="number" name="max">
                        <br><input type="submit" value="WYŚLIJ">
                        <input type="reset" value="WYCZYŚĆ">
                    </fieldset>
                </form>
            ');
        }
        else
        {
            if($_GET['min']<$_GET['max'] && $_GET['min']>=0)
            {
                $suma=0;
                $iloczyn=1;
                for($i=0; $i<=$_GET['lll']; $i++)
                {
                    $tab[$i]=rand($_GET['min'],$_GET['max']);
                    $suma+=$tab[$i];
                    $iloczyn*=$tab[$i];
                }
                print('Tablica: ');
                foreach($tab as $k=>$v)
                {
                    print($v.' ');
                }
                sort($tab);
                print('<br>Tablica posortowana: ');
                foreach($tab as $k=>$v)
                {
                    print($v.' ');
                }
                print('<br>Srednia arytmetyczna z elementów tablicy wynosi: '.number_format($suma/count($tab),2).'.<br>');
                print('Srednia geometryczna z elementów tablicy wynosi: '.number_format(pow($iloczyn, 1/count($tab)),2).'.');
            }
            else
            {
                print('Błąd');
            }
        }
    ?>
</body>
</html>