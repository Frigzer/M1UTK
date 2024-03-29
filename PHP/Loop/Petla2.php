<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pętla w PHP</title>
</head>
<body>
    <h1>Pętla WHILE</h1>
    <?php
    //Pętla while
    /*
    while (warunek)
    {
        blok instrukcji
    }
    */
    print('Ciąg liczb: ');
    $i=1;
    while ($i<=100)
    {
        if ($i%2==0)
        {
            print($i.', ');
        }
        $i++;
    }
    /*
    $i--;
    print('<br>Ciąg liczb: ');
    while ($i>=1)
    {
        print($i.', ');
        $i--;
    }
    */
    ?>
</body>
</html>