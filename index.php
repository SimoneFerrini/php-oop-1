<?php 
    require_once './Models/Movie.php';

    $movie1 = new Movie('Donnie Darko', '2001', ['drammatico','thriller'], ['Jake Gyllenhaal', 'Seth Rogen', 'Patrick Swayze']);
    $movie2 = new Movie('Star Wars: Episodio III - La vendetta dei Sith', '2005', ['Fantascienza', 'Avventura'], ['Natalie Portman', 'Ewan McGregor', 'Hayden Christensen', 'Ian McDiarmin'] );

    
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <?php 
    var_dump($movie1);
    var_dump($movie2);
    
    echo $movie1->getTitle();
    echo $movie2->getTitle();
    ?>
</body>
</html>