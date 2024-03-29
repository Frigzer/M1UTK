<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
     form{
        width:50%; margin:auto; text-align:center;
    }
    input{
        padding:.5rem; margin:1rem;
    }
    </style>
</head>
<body>
        <?php
            if(empty($_POST['imie']) || empty($_POST['nazwisko']))
            {
                print('<form method="post" action="'.$_SERVER['PHP_SELF'].'">');
                print('<fieldset><legend>Wprowadź swoje imie i nazwisko:</legend>');
                print('Nazwisko: <input type="text" name="nazwisko"><br><br>');
                print('Imie: <input type="text" name="imie"><br><br>');
                print('<input type="checkbox" name="zainteresowania[]" value="krykiet">krykiet');
                print('<input type="checkbox" name="zainteresowania[]" value="muzyka">muzyka'); 
                print('<input type="checkbox" name="zainteresowania[]" value="motoryzacja">motoryzacja</fieldset>');
                print('<input type="reset" value="WYCZYŚĆ">'.' '.'<input type="submit" value="WYŚLIJ">');
            }
            else
            {
                if(!is_numeric($_POST['imie']) && !is_numeric($_POST['nazwisko']))
                {
                    print('Zarejstrowano w bazie danych pracownika');
                    print('<b>'.$_POST['imie'].' '.$_POST['nazwisko'].'</b>.');
                    if(isset($_POST['zainteresowania']))
                    {
                        print('Zaintersowania zarejstowanego');
                        foreach($_POST['zainteresowania'] as $key => $element)
                        {
                            print($element.', ');
                        }
                        print('</b>."\n"');
                    }
                }
                else
                {
                    print('Wprowadzono niewłaściowy typ danych');
                }
            }
        ?>
</body>
</html>