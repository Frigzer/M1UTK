<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Nawiązywanie połączenia z bazą danych
    </title>
</head>
<body>
    <?php
        try
        {
            $c = new PDO('mysql:host=localhost; dbname=manchester_united', 'root', '');
        }
        catch (PDOException $e)
        {
            print('Błąd połączenia z bazą!: '.$e->getMessage().'<br/>');
            die();
        }

        $usuniete_rekordy = $c->exec('delete from pilkarze where id_pilkarza >= 8');
        print('Usuniętych rekordów: '.$usuniete_rekordy);
    ?>
</body>
</html>