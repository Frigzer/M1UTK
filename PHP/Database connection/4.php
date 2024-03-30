<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nawiązywanie połączenia z bazą danych</title>
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
    ?>
</body>
</html>