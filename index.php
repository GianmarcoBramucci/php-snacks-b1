<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <h1>Snack</h1>
    <ul>
        <?php
            for($i=1;$i<=7;$i++){
                echo "<li><a href='./sna$i/seam.php'>sna$i</a></li>";
            } 
        ?>
    </ul>
</body>
</html>