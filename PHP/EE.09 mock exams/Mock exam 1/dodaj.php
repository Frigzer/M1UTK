<?php
    $c = @new mysqli("localhost", "root", "", "dane");

    $gatunek=$_POST['gatunek_filmu'];
    $tytul=$_POST['tytul'];
    $rok=$_POST['rok_produkcji'];
    $ocena=$_POST['ocena'];

    $r = $c->query("INSERT INTO filmy VALUES ('', '$gatunek', '','$tytul', '$rok', '$ocena')");

    if ($r==false)
    {
        print('<p>Zapytanie nie zostało wykonane poprawnie!</p>');
        $c -> close();
    }
    else
    {
        print('<p>Film '.$tytul.' został dodany do bazy</p>');
        $c -> close();
    }
?>