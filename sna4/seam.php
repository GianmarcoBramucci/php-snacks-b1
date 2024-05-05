
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMERI-RANDOM</title>
</head>
<body>
    <h1>NUMERI RANDOM</h1>
    <ol>
    <?php
    $RandomArray=[];
    while(count($RandomArray) < 15) {
        $NumRandom= rand(0,20);
        if(array_search($NumRandom, $RandomArray) === false) {
            $RandomArray[]=$NumRandom;
            echo"<li>||$NumRandom</li>";
        }
    }
?>        
    </ol>
</body>
</html>