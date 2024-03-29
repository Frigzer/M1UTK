<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
</head>
<body>
    <?php
        $gallery=array();
        for ($i=1; $i<=5; $i++)
        {
            $gallery[]=$i.'.jpg';
        }
        foreach ($gallery as $img)
        {
            echo "<img src=big/$img> => <img src=small/$img><br>";
        }
    ?>
</body>
</html>