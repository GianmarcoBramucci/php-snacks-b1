
<?php 
    $Paragrafo='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, optio ea soluta aliquid quaerat nulla ut explicabo harum? Et dolores impedit quae quaerat praesentium iure nostrum sapiente. Odio, dolores sint.';
    $ArrayFrasi= array_filter(explode('.',$Paragrafo));
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HO-FINITO-LE-IDEE-PER-I-NOMI</title>
</head>
<body>
    <h1>lorem</h1>
    <ul>
        <?php
            foreach($ArrayFrasi as $Frasi){
                echo "<li>$Frasi</li>";
            } 
        ?>
    </ul>
</body>
</html>