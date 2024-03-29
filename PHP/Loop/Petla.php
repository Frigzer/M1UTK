<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pętle w PHP</title>
</head>
<body>
    <h1>Pętla FOR</h1>
    <?php
    //Pętla for
    /*
    for (warunek początkowy, warunek pętli, modulator)
    {
        blok pętli
    }
    
    print('Ciąg liczb: ');
    for ($i=1; $i<=100; $i++)
    {
        print($i.', ');
    }
    $i--;
    print('<br>Ciąg liczb: ');
    for ($i; $i>=1; $i--)
    {
        if($i==33 || $i==66)
        {
            break;
        }
        print($i.', ');
    }
    */
    print('Ciąg liczb: ');
    for ($i=1; $i<=100; $i++)
    {
        if($i%2!=0 && $i%5==0)
        {
            print($i.', ');
        }
    }
    ?>
</body>
</html>