<?php 
    require_once './Models/Movie.php';

    $movie1 = new Movie('Donnie Darko', '2001', ['drammatico','thriller'], ['Jake Gyllenhaal', 'Seth Rogen', 'Patrick Swayze']);
    $movie2 = new Movie('Star Wars: Episodio III - La vendetta dei Sith', '2005', ['Fantascienza', 'Avventura'], ['Natalie Portman', 'Ewan McGregor', 'Hayden Christensen', 'Ian McDiarmin'] );
    $movie3 = new Movie('Van Helsing', '2004', ['Horror','Fantascienza'],['Hugh Jackman', 'Kate Beckinsale', 'Richard Roxburgh', 'Josie Maran']);
    $movie4 = new Movie('Spider-Man: No Way Home', '2021', ['Azione', 'Avventura'], ['Tom Holland', 'Tobey Maguire', 'Andrew Garfield', 'Willem Dafoe']);


    $movies = [
        $movie1, $movie2, $movie3, $movie4
    ];
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Anno di pubblicazione</th>
                    <th>Generi</th>
                    <th>Cast</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($movies as $singleMovie){
                ?>
                    <tr class="row">
                        <td><?= $singleMovie->title ?></td>
                        <td><?= $singleMovie->releaseYear ?></td>
                        <td><?= $singleMovie->getGenres($singleMovie->genres) ?></td>
                        <td><?= $singleMovie->getActors($singleMovie->actors) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>