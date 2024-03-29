<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        form{width:50%; margin:auto; text-align:center;}
        input {padding:.5rem; margin:1rem;}
    </style>
</head>
<body>
    <?php
        if(!isset($_POST['imie']) || !isset($_POST['nazwisko']) || !isset($_POST['zainteresowanie']))
        {
            print('<form method="post" action="'.$_SERVER['PHP_SELF'].'">');
            print('<fieldset>');
            print('<legend>Wpisz imię i nazwisko oraz wybierz zainteresowania</legend>');
            print('Imię: <input type="text" name="imie"><br>');
            print('Nazwisko <input type="text" name="nazwisko"><br>');
            print('Zainteresowania: ');
            print('<input type="checkbox" name="zainteresowanie[]" value="siatkowka"> siatkówka');
            print('<input type="checkbox" name="zainteresowanie[]" value="plywanie"> pływanie');
            print('<input type="checkbox" name="zainteresowanie[]" value="tenis"> tenis');
            print('<input type="checkbox" name="zainteresowanie[]" value="bieganie"> bieganie');
            print('</fieldset>');
            print('<input type="submit" value="WYŚLIJ">');
            print('<input type="reset" value="WYCZYŚĆ">');
            print('</form>');
        }
        else
        {
            if(!is_numeric($_POST['imie']) && !is_numeric($_POST['nazwisko']))
            {
                print('<p>W serwisie został zarejestrowany <b>'.$_POST['imie'].' '.$_POST['nazwisko'].'</b>, o zainteresowaniach: <b>');
                foreach($_POST['zainteresowanie'] as $k => $v)
                {
                    print($v.', ');
                }
                print('</b>');
            }
            else
            {
                print("Niewłaściwy typ danych");
            }
        }
    ?>
</body>
</html>