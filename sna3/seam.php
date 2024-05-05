<?php
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAKEBOOK</title>
</head>
<body>
    <h1>FAKEBOOK</h1>
    <?php
        $Dates= array_keys($posts);
        foreach($Dates as $Date){
            $DayPosts= $posts[$Date];
            echo "<div><h3>$Date</h3>";
            foreach($DayPosts as $DayPost){
                $Title=$DayPost['title'];
                $Author=$DayPost['author'];
                $Text=$DayPost['text'];
                echo"<div><span>$Title</span><span>$Author</span><span>$Text</span></div></div>";     
            }
        }  
    ?>
    
</body>
</html>