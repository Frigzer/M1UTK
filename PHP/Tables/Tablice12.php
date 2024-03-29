<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
       print($_SERVER['PHP_SELF'].'<br>');
       print($_SERVER['SERVER_NAME'].'<br>');
       print($_SERVER['HTTP_HOST'].'<br>');
       print($_SERVER['HTTP_USER_AGENT'].'<br>');
       print($_SERVER['SCRIPT_NAME']);
    ?>
</body>
</html>