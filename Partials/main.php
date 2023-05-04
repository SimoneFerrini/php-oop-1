
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
