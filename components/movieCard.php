<?php
function printMovieCard($movie) {
?>
    <div class="card">
        <img src="<?php echo $movie->getPoster() ?>" class="card-img-top" alt="">
        <div class="card-body py-3">
            <h3 class="card-title"><?php echo $movie->getTitle(); ?></h3>
            <p class="card-text"><strong>Trama:</strong> <?php echo $movie->getPlot(); ?></p>
            <p class="card-text"><strong>Anno:</strong> <?php echo $movie->getYear(); ?></p>
            <p class="card-text"><strong>Durata:</strong> <?php echo $movie->getDuration(); ?></p>
            <p class="card-text"><strong>Genere:</strong> <?php echo $movie->getGenre(); ?></p>
            <p class="card-text"><strong>Regista:</strong> <?php echo $movie->getDirector(); ?></p>
            <p class="card-text">
                <strong>Attori:</strong>
                <?php
                foreach ($movie->getActors() as $index => $actor) {
                    if ($index !== 0) {
                        echo ", " . $actor;
                    } else {
                        echo $actor;
                    }
                }
                ?>
            </p>
        </div>
    </div>
<?php
}
?>