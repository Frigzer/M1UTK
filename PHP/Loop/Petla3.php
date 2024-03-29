<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pętla w PHP</title>
</head>
<body>
    <h1>Pętla DO WHILE</h1>
    <?php
    //Pętla do while
    /*
    do
    {
        blok instrukcji
    }
    while (warunek)
    */
    print('Ciąg liczb: ');
    $i=1; 
    do 
    {
        if ($i%2==0)
        {
            print($i.', ');
        }
        $i++;
    }
    while ($i<=100)
    ?>
</body>
</html>