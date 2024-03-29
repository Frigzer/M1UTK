<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablice w PHP</title>
</head>
<body>
    <?php
        $tab_1=[12,45,78,98,431,45,78];
        foreach ($tab_1 as $key =>$value)
        {
            print('['.$key.']=>['.$value.']<br>');
        }

        
    ?>
</body>
</html>