<?php ?>
<?php
    $partite_di_basket = [
        ["casa" => "Squadra A", "ospite" => "Squadra B", "punti_casa" => 80, "punti_ospite" => 75],
        ["casa" => "Squadra C", "ospite" => "Squadra D", "punti_casa" => 90, "punti_ospite" => 85],
        ["casa" => "Squadra E", "ospite" => "Squadra F", "punti_casa" => 70, "punti_ospite" => 72],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.P.G.C.B</title>
</head>
<body>
    <h1>Risultati partite giocate campionato di basket</h1>
    <ul>
        <?php
            foreach ($partite_di_basket as $partita){
                $SquadraCasa= $partita["casa"];
                $SquadraOspite= $partita["ospite"];
                $PuntiOspite= $partita["punti_ospite"];
                $PuntiCasa= $partita["punti_casa"];
                echo "<li>$SquadraCasa-$SquadraOspite|$PuntiCasa-$PuntiOspite</li>";
            }
        ?>
        
    </ul>
</body>
</html>