<?php $classe = [
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [7, 8, 5, 9]
    ],
    [
        'nome' => 'Anna',
        'cognome' => 'Verdi',
        'voti' => [6, 8, 7, 9]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Bianchi',
        'voti' => [8, 9, 7, 8]
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Neri',
        'voti' => [4, 7, 8, 9]
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Gialli',
        'voti' => [8, 9, 6, 8]
    ]
];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.02-e-va-tutto-bene</title>
</head>
<body>
    <h1>Pagelle fake</h1>
    <ol>
        <?php 
        foreach ($classe as $alunno) {
            $NomeCognome=$alunno['nome'].' '.$alunno['cognome'];
            $Somma= 0;
            foreach($alunno['voti'] as $voto){
                $Somma+= $voto;
            }
            $Media= $Somma/count($alunno['voti']);
            echo "<li><span>$NomeCognome</span><span> $Media</span></li>";
        }
        ?>
    </ol>
</body>
</html>