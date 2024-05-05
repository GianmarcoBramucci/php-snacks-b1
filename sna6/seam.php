<?php 
     $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>lorem</title>
</head>
<body>
    <h1>boh insegnanti e pm?</h1>
    <?php 
        $Positions= array_keys($db);
        foreach ($Positions as $Position) {
            if ($Position == 'teachers') {
                $Color = 'gray';
            }else{
                $Color = 'green';
            }
            foreach ($db[$Position] as $Peaple) {
                $Name= $Peaple['name'];
                $LastName= $Peaple['lastname'];
                echo"<div class='$Color'><span>$Name </span><span>$LastName</span></div>";
            }
        }
    ?>
</body>
</html>