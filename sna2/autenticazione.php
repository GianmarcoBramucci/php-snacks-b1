<?php ?>
<?php
    $Name=$_GET['name'];
    $Email=$_GET['email'];
    $Age=$_GET['age'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticazione</title>
</head>
<body>
    <h1>Autenticazione</h1>
    <div>
    <?php
        if((strlen($Name)>= 3)&&(is_numeric($Age))&&(strpos($Email, '@') !== false)&&(strpos($Email, '.') !== false)){
            echo'Autenticazione riuscita';
        }
        else{
            echo'Autenticazione fallita';
        }
    ?>
    </div>
</body>
</html>