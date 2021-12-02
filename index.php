<?php
    require_once "./classes/Classe.php";
    require "./components/movieCard.php";

    $movie1 = new Movie("Inception", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/685ecb434ec1e6e6caba39375cbfd1b4a6f97bfe575f74b2cfe7a3c6b7eabf05._RI_V_TTW_.jpg", "Leonardo DiCaprio è Dom Cobb, il ladro più abile nel riuscire ad estrarre segreti preziosi dal profondo del subconscio umano.", 2010, 142, "Azione", "Christopher Nolan", ["Leonardo DiCaprio", "Ken Watanabe", "Joseph Gordon-Levitt", "Marion Cotillard", "Elliot Page"]);
    $movie2 = new Movie("The Tourist", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/175c7c622f9a947cd05f4ea0e102bf3153b261e7a98d68fae9b826469f69d027._RI_V_TTW_.jpg", "Il professore di matematica Frank Tupelo, americano in visita in Italia, cade nella trappola di una donna tanto astuta quanto bella.", 2010, 105, "Thriller", "Florian Henckel von Donnersmarck", ["Johnny Depp", "Angelina Jolie", "Paul Bettany", "Timothy Dalton", "Steven Berkoff", "Rufus Sewell"]);
    $movie3 = new Movie("The Tourist", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/175c7c622f9a947cd05f4ea0e102bf3153b261e7a98d68fae9b826469f69d027._RI_V_TTW_.jpg", "Il professore di matematica Frank Tupelo, americano in visita in Italia, cade nella trappola di una donna tanto astuta quanto bella.", 2010, 105, "Thriller", "Florian Henckel von Donnersmarck", ["Johnny Depp", "Angelina Jolie", "Paul Bettany", "Timothy Dalton", "Steven Berkoff", "Rufus Sewell"]);
    $movie4 = new Movie("Inception", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/685ecb434ec1e6e6caba39375cbfd1b4a6f97bfe575f74b2cfe7a3c6b7eabf05._RI_V_TTW_.jpg", "Leonardo DiCaprio è Dom Cobb, il ladro più abile nel riuscire ad estrarre segreti preziosi dal profondo del subconscio umano.", 2010, 142, "Azione", "Christopher Nolan", ["Leonardo DiCaprio", "Ken Watanabe", "Joseph Gordon-Levitt", "Marion Cotillard", "Elliot Page"]);
    $movie5 = new Movie("Inception", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/685ecb434ec1e6e6caba39375cbfd1b4a6f97bfe575f74b2cfe7a3c6b7eabf05._RI_V_TTW_.jpg", "Leonardo DiCaprio è Dom Cobb, il ladro più abile nel riuscire ad estrarre segreti preziosi dal profondo del subconscio umano.", 2010, 142, "Azione", "Christopher Nolan", ["Leonardo DiCaprio", "Ken Watanabe", "Joseph Gordon-Levitt", "Marion Cotillard", "Elliot Page"]);
    $movie6 = new Movie("The Tourist", "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/175c7c622f9a947cd05f4ea0e102bf3153b261e7a98d68fae9b826469f69d027._RI_V_TTW_.jpg", "Il professore di matematica Frank Tupelo, americano in visita in Italia, cade nella trappola di una donna tanto astuta quanto bella.", 2010, 105, "Thriller", "Florian Henckel von Donnersmarck", ["Johnny Depp", "Angelina Jolie", "Paul Bettany", "Timothy Dalton", "Steven Berkoff", "Rufus Sewell"]);

    $movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "components/pageHead.php"
    ?>
</head>

<body>
    <header></header>
    <main class="py-5">
        <div class="container">
            <div class="d-flex justify-content-around flex-wrap">
                <?php
                    foreach ($movies as $movie) {
                        printMovieCard($movie);
                    }
                ?>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>