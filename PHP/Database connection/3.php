<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nawiązywanie połączenia z bazą danych</title>
</head>
<body>
    <?php
        $c = new PDO('mysql:host=localhost; dbname=manchester_united', 'root', '');
    ?>
</body>
</html>