<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela</title>
    <style type='text/css'>
        table{
            margin:auto;
            border:1px solid red;
            width:60%;
        }
        th, td{
            border:1px solid red;
            text-align:center;
        }
        th{
            background:lightgreen;
        }

    </style>
</head>
<body>
    <?php
        $tablica=array(
            'Gajusz Juliusz', 'Cezar', 'Dyktator',
            'Osama', 'Bin-Laden', 'Ekspert ds. wybuchów',
            'Tomasz', 'Kot', 'Skoczek Narciarski',
            'Kylo', 'Ren', 'Konserwator powierzchni płaskich',

        );

        print('<table>');
        print('<tr><th>IMIĘ</th><th>NAZWISKO</th><th>STANOWISKO</th></tr>');

        for ($i=0; $i<=11; $i+=3)
        {
            print('<tr>');
            print( '<td>'.$tablica[$i].'</td><td>'.$tablica[$i+1].'</td><td>'.$tablica[$i+2].'</td>');
            print('</tr>');
        }
        print('</table>');
    ?> 
</body>
</html>