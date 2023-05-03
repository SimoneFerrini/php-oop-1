<?php 
    require_once './Models/db.php';
    
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